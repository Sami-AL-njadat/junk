<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo" aria-label="{{ $site['name'] }} — home">
                    @include('partials.titan-logo', ['size' => 120, 'alt' => $site['name'].' logo', 'lazy' => true])
                </a>
                <p>Chicago’s trusted junk car buyer. We pay top dollar for vehicles in any condition — with free
                    towing always included.</p>
            </div>

            <div>
                <h2 class="footer-title">Contact</h2>
                <ul class="footer-list">
                    <li>
                        <a href="tel:{{ $site['phone'] }}" class="footer-phone">
                            <x-icon name="phone" /> {{ $site['phone_display'] }}
                        </a>
                    </li>
                    <li>
                        <a href="sms:{{ $site['phone'] }}">
                            <x-icon name="chat" /> Text us anytime
                        </a>
                    </li>
                    <li>
                        <a href="{{ $site['maps_url'] }}" target="_blank" rel="noopener">
                            <x-icon name="pin" />
                            <span>{{ $site['address']['street'] }}<br>{{ $site['address']['city'] }},
                                {{ $site['address']['region'] }} {{ $site['address']['postal_code'] }}</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="footer-title">Hours</h2>
                <dl class="footer-hours">
                    @foreach ($site['hours'] as $h)
                        <div>
                            <dt>{{ $h['label'] }}</dt>
                            <dd>{{ $h['display'] }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="footer-note"><x-icon name="bolt" /> Same-day pickup available</p>
            </div>

            <div>
                <h2 class="footer-title">Quick links</h2>
                <ul class="footer-list footer-links">
                    <li><a href="#how-it-works">How it works</a></li>
                    <li><a href="#why-us">Why choose Titan</a></li>
                    <li><a href="#cars-we-buy">Cars we buy</a></li>
                    <li><a href="#service-area">Service area</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Get a free quote</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ now()->year }} {{ $site['name'] }}. All rights reserved.</p>
            <p>Junk car removal &amp; cash for cars in Chicago, IL and suburbs.</p>
            <p class="footer-credit">Developed by <a href="https://sami-al-njadat.github.io/" target="_blank"
                    rel="noopener">Sami Alnjadat</a></p>
        </div>
    </div>
</footer>
