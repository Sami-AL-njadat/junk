<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Single-page marketing site: structured content + SEO data for the home view.
 */
class HomeController extends Controller
{
    public function __invoke(): View
    {
        $site = config('titan');
        $phone = $site['phone_display'];

        $title = "Cash for Junk Cars Chicago, IL | Free Towing | Titan {$phone}";
        $metaDescription = 'Get cash for junk cars in Chicago, IL. Free towing, same-day pickup and top dollar for any make or model — running or not. Call Titan at '.$phone.' for a free offer.';

        $serviceAreas = ['Chicago', 'Lockport', 'Palos Hills', 'Orland Park', 'Tinley Park', 'Joliet', 'Naperville', 'Oak Lawn', 'Bridgeview', 'Burbank', 'Worth', 'Alsip', 'Harvey', 'Aurora', 'Bolingbrook', 'Cicero'];

        $faqs = [
            [
                'q' => 'How much cash will I get for my junk car?',
                'a' => 'Your offer depends on the year, make, model, condition and current scrap metal prices. Call or text us the details and we’ll give you a free, no-obligation cash offer in minutes — and we’ll beat any legitimate written offer from a competitor.',
            ],
            [
                'q' => 'Is towing really free?',
                'a' => 'Yes. Towing is always free anywhere in our Chicagoland service area. The offer we quote is the cash you keep — no hidden fees or deductions at pickup.',
            ],
            [
                'q' => 'How fast can you pick up my car?',
                'a' => 'In most cases we can pick up your vehicle the same day you call. We’re open Monday to Saturday 8 AM – 8 PM and Sunday 10 AM – 6 PM.',
            ],
            [
                'q' => 'Do you buy cars that don’t run or are wrecked?',
                'a' => 'Absolutely. We buy running and non-running vehicles, wrecked cars, flood- and fire-damaged vehicles, salvage vehicles and cars with missing parts — any make, model or year.',
            ],
            [
                'q' => 'What do I need to sell my junk car?',
                'a' => 'Usually just the vehicle title and a valid photo ID. Don’t have the title? Give us a call and we’ll walk you through the options for your situation.',
            ],
            [
                'q' => 'How do I get paid?',
                'a' => 'We pay you cash on the spot when we pick up your vehicle. No waiting on checks or bank transfers.',
            ],
            [
                'q' => 'Which areas do you serve?',
                'a' => 'We buy junk cars all across Chicago and the surrounding suburbs, including '.implode(', ', array_slice($serviceAreas, 1, -1)).' and '.end($serviceAreas).'.',
            ],
        ];

        return view('home', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'canonical' => $site['url'].'/',
            'heroStats' => [
                ['icon' => 'dollar', 'value' => '$2M+', 'label' => 'Paid out to customers'],
                ['icon' => 'truck', 'value' => '5,000+', 'label' => 'Cars picked up'],
                ['icon' => 'star', 'value' => '500+', 'label' => '5-star reviews'],
            ],
            'steps' => [
                ['icon' => 'phone', 'title' => 'Call or text', 'desc' => "Reach us at {$phone} with your vehicle’s year, make, model and condition."],
                ['icon' => 'clipboard', 'title' => 'Get your offer', 'desc' => 'We give you an instant, no-obligation cash offer based on your car and today’s scrap prices.'],
                ['icon' => 'cash', 'title' => 'Get paid cash', 'desc' => 'We tow your car away for free and hand you cash on the spot. Same-day pickup available.'],
            ],
            'features' => [
                ['icon' => 'truck', 'title' => 'Free towing', 'desc' => 'We never charge for pickup. The offer we give is the cash you keep.'],
                ['icon' => 'clock-history', 'title' => 'Same-day pickup', 'desc' => 'Need it gone today? We offer rapid response across the Chicago area.'],
                ['icon' => 'dollar', 'title' => 'Top dollar paid', 'desc' => 'We track market scrap prices daily to give you the best possible offer.'],
                ['icon' => 'car', 'title' => 'Any make or model', 'desc' => 'Running, wrecked, salvaged or missing parts — we buy them all.'],
            ],
            'galleryCars' => [
                ['label' => 'Junk sedans', 'image' => 'junk-sedans', 'alt' => 'Abandoned junk sedan with a missing wheel overgrown by weeds'],
                ['label' => 'Wrecked cars', 'image' => 'wrecked-cars', 'alt' => 'Wrecked car with heavy front-end collision damage parked on a city street'],
                ['label' => 'Old trucks', 'image' => 'old-trucks', 'alt' => 'Old rusted pickup truck we buy for cash'],
                ['label' => 'Fire & flood damage', 'image' => 'fire-flood-damage', 'alt' => 'Fire-damaged, rusted car abandoned in an overgrown lot'],
                ['label' => 'Non-running cars', 'image' => 'non-running', 'alt' => 'Non-running blue car overgrown with plants'],
                ['label' => 'Any make & model', 'image' => 'any-make-model', 'alt' => 'Row of stripped cars of different makes waiting for removal'],
            ],
            'serviceAreas' => $serviceAreas,
            'faqs' => $faqs,
            'structuredData' => $this->structuredData($site, $title, $metaDescription, $serviceAreas, $faqs),
        ]);
    }

    /**
     * JSON-LD graph: local business, website, web page, service and FAQ.
     */
    private function structuredData(array $site, string $title, string $description, array $areas, array $faqs): array
    {
        $url = $site['url'].'/';
        $business = ['@id' => $url.'#business'];
        $areaServed = array_map(fn (string $city) => ['@type' => 'City', 'name' => "{$city}, IL"], $areas);

        return [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'AutomotiveBusiness',
                    '@id' => $url.'#business',
                    'name' => $site['name'],
                    'alternateName' => 'Titan Cash',
                    'description' => 'Titan Cash For Junk Cars buys junk, wrecked and unwanted vehicles across Chicago and the suburbs — free towing, same-day pickup and cash on the spot.',
                    'url' => $url,
                    'telephone' => $site['phone'],
                    'image' => [
                        $site['url'].'/images/og-image.jpg',
                        $site['url'].'/images/hero/hero-1600.webp',
                    ],
                    'logo' => $site['url'].'/images/logo.png',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => $site['address']['street'],
                        'addressLocality' => $site['address']['city'],
                        'addressRegion' => $site['address']['region'],
                        'postalCode' => $site['address']['postal_code'],
                        'addressCountry' => $site['address']['country'],
                    ],
                    'hasMap' => $site['maps_url'],
                    'openingHoursSpecification' => array_map(fn (array $h) => [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => $h['days'],
                        'opens' => $h['opens'],
                        'closes' => $h['closes'],
                    ], $site['hours']),
                    'areaServed' => $areaServed,
                    'currenciesAccepted' => 'USD',
                    'paymentAccepted' => 'Cash',
                    'knowsAbout' => ['Junk car removal', 'Cash for cars', 'Scrap car buying', 'Free towing'],
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => $url.'#website',
                    'url' => $url,
                    'name' => $site['name'],
                    'publisher' => $business,
                    'inLanguage' => 'en-US',
                ],
                [
                    '@type' => 'WebPage',
                    '@id' => $url.'#webpage',
                    'url' => $url,
                    'name' => $title,
                    'description' => $description,
                    'isPartOf' => ['@id' => $url.'#website'],
                    'about' => $business,
                    'primaryImageOfPage' => $site['url'].'/images/hero/hero-1600.webp',
                    'inLanguage' => 'en-US',
                ],
                [
                    '@type' => 'Service',
                    '@id' => $url.'#service',
                    'name' => 'Cash for junk cars & free junk car removal',
                    'serviceType' => 'Junk car buying and removal',
                    'provider' => $business,
                    'areaServed' => $areaServed,
                    'description' => 'Free towing and cash paid on the spot for junk, wrecked and unwanted vehicles.',
                ],
                [
                    '@type' => 'FAQPage',
                    '@id' => $url.'#faq',
                    'mainEntity' => array_map(fn (array $f) => [
                        '@type' => 'Question',
                        'name' => $f['q'],
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
                    ], $faqs),
                ],
            ],
        ];
    }
}
