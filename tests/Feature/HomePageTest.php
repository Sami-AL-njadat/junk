<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_renders_core_content(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Turn your junk car into', false)
            ->assertSee('tel:+13313414878', false)
            ->assertSee('(331) 341-4878')
            ->assertSee('id="how-it-works"', false)
            ->assertSee('id="faq"', false)
            ->assertSee('id="contact"', false);
    }

    public function test_home_page_has_seo_tags(): void
    {
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('<link rel="canonical" href="https://titan-cash-for-junk-cars.com/">', $html);
        $this->assertStringContainsString('<meta property="og:image" content="https://titan-cash-for-junk-cars.com/images/og-image.jpg">', $html);
        $this->assertStringContainsString('<meta name="twitter:card" content="summary_large_image">', $html);
        $this->assertSame(1, substr_count($html, '<h1'), 'Page should have exactly one <h1>.');
    }

    public function test_structured_data_is_valid_json_ld(): void
    {
        $html = $this->get('/')->getContent();

        $this->assertMatchesRegularExpression('#<script type="application/ld\+json">(.+?)</script>#s', $html);
        preg_match('#<script type="application/ld\+json">(.+?)</script>#s', $html, $m);
        $data = json_decode($m[1], true, flags: JSON_THROW_ON_ERROR);

        $types = array_column($data['@graph'], '@type');
        $this->assertContains('AutomotiveBusiness', $types);
        $this->assertContains('FAQPage', $types);
        $this->assertContains('WebSite', $types);

        $business = $data['@graph'][array_search('AutomotiveBusiness', $types)];
        $this->assertSame('+13313414878', $business['telephone']);
        $this->assertSame('Palos Hills', $business['address']['addressLocality']);

        $faq = $data['@graph'][array_search('FAQPage', $types)];
        $this->assertNotEmpty($faq['mainEntity']);
    }

    public function test_www_host_redirects_to_canonical_domain(): void
    {
        $this->get('https://www.titan-cash-for-junk-cars.com/?utm_source=test')
            ->assertStatus(301)
            ->assertRedirect('https://titan-cash-for-junk-cars.com/?utm_source=test');
    }
}
