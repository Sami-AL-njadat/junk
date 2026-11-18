@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="hero" aria-labelledby="hero-title">
        <picture class="hero-media">
            <source type="image/avif"
                srcset="{{ asset('images/hero/hero-640.avif') }} 640w, {{ asset('images/hero/hero-1024.avif') }} 1024w, {{ asset('images/hero/hero-1600.avif') }} 1600w, {{ asset('images/hero/hero-2000.avif') }} 2000w"
                sizes="100vw">
            <img src="{{ asset('images/hero/hero-1600.webp') }}"
                srcset="{{ asset('images/hero/hero-640.webp') }} 640w, {{ asset('images/hero/hero-1024.webp') }} 1024w, {{ asset('images/hero/hero-1600.webp') }} 1600w, {{ asset('images/hero/hero-2000.webp') }} 2000w"
                sizes="100vw" width="1600" height="1067" fetchpriority="high" decoding="async"
                alt="Damaged car strapped onto a flatbed tow truck for free junk car removal in Chicago">
        </picture>

        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="hero-badge">
                    <span class="ping" aria-hidden="true"></span>
                    Chicago’s #1 junk car buyer
                </p>

                <h1 id="hero-title" class="hero-title">
                    <span class="hero-kicker">Cash for junk cars · Chicago, IL</span>
                    Turn your junk car into <span class="text-gold">cash.</span>
                </h1>

                <p class="hero-lead">
                    We pay top dollar for any make, model or condition — running or not. Free towing, same-day pickup
                    and cash in your hand on the spot.
                </p>

                <div class="hero-ctas" data-hero-cta>
                    <a href="tel:{{ $site['phone'] }}" class="btn btn-primary btn-lg">
                        <x-icon name="phone" /> {{ $site['phone_display'] }}
                    </a>
                    <a href="sms:{{ $site['phone'] }}" class="btn btn-ghost btn-lg">
                        <x-icon name="chat" /> Text for a quote
                    </a>
                </div>

                <ul class="hero-checks" aria-label="What you get with every deal">
                    @foreach (['Free towing', 'Same-day pickup', 'Cash on the spot'] as $item)
                        <li><x-icon name="check" /> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <aside class="offer-card" aria-labelledby="offer-title">
                <p class="offer-eyebrow">Free · No obligation</p>
                <h2 id="offer-title" class="offer-title">Get a cash offer in minutes</h2>
                <ul class="offer-stats">
                    @foreach ($heroStats as $row)
                        <li>
                            <span class="offer-stat-icon"><x-icon :name="$row['icon']" /></span>
                            <span>
                                <strong>{{ $row['value'] }}</strong>
                                <span>{{ $row['label'] }}</span>
                            </span>
                        </li>
                    @endforeach
                </ul>
                <a href="tel:{{ $site['phone'] }}" class="offer-phone">
                    <x-icon name="phone" />
                    <span>
                        <strong>{{ $site['phone_display'] }}</strong>
                        <span>Call or text anytime</span>
                    </span>
                    <x-icon name="arrow" class="offer-phone-arrow" />
                </a>
                <p class="offer-hours">
                    <x-icon name="clock" />
                    <span>
                        @foreach ($site['hours'] as $h)
                            <span>{{ $h['label'] }}: {{ $h['display'] }}</span>
                        @endforeach
                    </span>
                </p>
            </aside>
        </div>
    </section>

    {{-- How it works --}}
    <section id="how-it-works" class="section" aria-labelledby="how-title">
        <div class="container">
            <header class="section-head">
                <p class="eyebrow">Simple &amp; fast</p>
                <h2 id="how-title" class="section-title">How it <span class="text-accent">works</span></h2>
                <p class="section-lead">Three simple steps to turn your junk car into cash. No hassle, no stress, no
                    hidden fees.</p>
            </header>

            <ol class="steps">
                @foreach ($steps as $step)
                    <li class="step reveal">
                        <span class="step-num" aria-hidden="true">0{{ $loop->iteration }}</span>
                        <span class="step-icon"><x-icon :name="$step['icon']" /></span>
                        <h3 class="step-title">{{ $step['title'] }}</h3>
                        <p>{{ $step['desc'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Why Titan --}}
    <section id="why-us" class="section section-alt" aria-labelledby="why-title">
        <div class="container why-grid">
            <div class="why-copy">
                <p class="eyebrow">The Titan difference</p>
                <h2 id="why-title" class="section-title">Why sell to <span class="text-accent">Titan?</span></h2>
                <p class="section-body">
                    Selling a junk car shouldn’t feel like a sketchy transaction. At Titan Cash For Junk Cars we’ve
                    built our reputation on transparency, speed and paying the highest possible rates in the Chicago
                    area.
                </p>
                <div class="guarantee">
                    <span class="guarantee-icon"><x-icon name="shield" /></span>
                    <div>
                        <p class="guarantee-title">We beat any written offer</p>
                        <p>Bring us a legitimate quote from a competitor and we’ll beat it. That’s the Titan
                            Guarantee.</p>
                    </div>
                </div>
            </div>

            <ul class="features">
                @foreach ($features as $f)
                    <li class="feature reveal">
                        <span class="feature-icon"><x-icon :name="$f['icon']" /></span>
                        <h3 class="feature-title">{{ $f['title'] }}</h3>
                        <p>{{ $f['desc'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Cars we buy --}}
    <section id="cars-we-buy" class="section" aria-labelledby="cars-title">
        <div class="container">
            <header class="section-head">
                <p class="eyebrow">All conditions welcome</p>
                <h2 id="cars-title" class="section-title">Cars we <span class="text-accent">buy</span></h2>
                <p class="section-lead">Running or not, wrecked, flooded or just plain old — we buy every type of
                    vehicle across the Chicago area.</p>
            </header>

            <ul class="cars">
                @foreach ($galleryCars as $car)
                    <li class="car reveal">
                        <img src="{{ asset('images/gallery/'.$car['image'].'-800.webp') }}"
                            srcset="{{ asset('images/gallery/'.$car['image'].'-480.webp') }} 480w, {{ asset('images/gallery/'.$car['image'].'-800.webp') }} 800w"
                            sizes="(min-width: 1024px) 380px, (min-width: 640px) 50vw, 100vw" width="800"
                            height="600" alt="{{ $car['alt'] }}" loading="lazy" decoding="async">
                        <span class="car-chip">We buy it</span>
                        <h3 class="car-label">{{ $car['label'] }}</h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Service area --}}
    <section id="service-area" class="section section-dark" aria-labelledby="area-title">
        <div class="container area-grid">
            <div class="area-copy">
                <p class="eyebrow eyebrow-gold">Free towing across Chicagoland</p>
                <h2 id="area-title" class="section-title">Junk car removal in <span class="text-gold">greater
                        Chicago</span></h2>
                <p class="section-body">
                    Wherever your vehicle is parked in the metro area, our trucks come to you — fast, free and
                    efficient. Based in {{ $site['address']['city'] }}, we pick up junk cars from Chicago’s
                    neighborhoods and suburbs every day.
                </p>
                <a href="{{ $site['maps_url'] }}" class="area-address" target="_blank" rel="noopener">
                    <x-icon name="pin" />
                    <span>
                        <strong>{{ $site['address']['street'] }}</strong>
                        <span>{{ $site['address']['city'] }}, {{ $site['address']['region'] }}
                            {{ $site['address']['postal_code'] }} · Get directions</span>
                    </span>
                </a>
            </div>

            <div class="area-panel">
                <ul class="cities">
                    @foreach ($serviceAreas as $area)
                        <li><x-icon name="pin" /> {{ $area }}</li>
                    @endforeach
                </ul>
                <p class="cities-more">+ surrounding suburbs</p>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="section" aria-labelledby="faq-title">
        <div class="container faq-grid">
            <div class="faq-intro">
                <p class="eyebrow">Questions?</p>
                <h2 id="faq-title" class="section-title">Junk car <span class="text-accent">FAQ</span></h2>
                <p class="section-body">Everything you need to know about selling your junk car for cash in Chicago.
                    Still have a question? We’re a phone call away.</p>
                <a href="tel:{{ $site['phone'] }}" class="btn btn-outline">
                    <x-icon name="phone" /> {{ $site['phone_display'] }}
                </a>
            </div>

            <div class="faq-list">
                @foreach ($faqs as $faq)
                    <details class="faq" @if ($loop->first) open @endif>
                        <summary>
                            <h3>{{ $faq['q'] }}</h3>
                            <x-icon name="chevron" class="faq-chevron" />
                        </summary>
                        <p>{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA band --}}
    <section class="section section-tight" aria-labelledby="cta-title">
        <div class="container">
            <div class="cta-band">
                <div>
                    <h2 id="cta-title" class="cta-title">Ready to turn that junk car into cash?</h2>
                    <p>Get your free, no-obligation offer in minutes. Free towing and same-day pickup across
                        Chicagoland.</p>
                </div>
                <div class="cta-actions">
                    <a href="tel:{{ $site['phone'] }}" class="btn btn-primary btn-lg">
                        <x-icon name="phone" /> {{ $site['phone_display'] }}
                    </a>
                    <a href="sms:{{ $site['phone'] }}" class="btn btn-ghost btn-lg">
                        <x-icon name="chat" /> Text us
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="section section-alt" aria-labelledby="contact-title">
        <div class="container">
            <header class="section-head">
                <p class="eyebrow">Get in touch</p>
                <h2 id="contact-title" class="section-title">Contact <span class="text-accent">us</span></h2>
                <p class="section-lead">Ready to get cash for your junk car? Reach out today — we’re fast, friendly and
                    always fair.</p>
            </header>

            <div class="contact-cards">
                <div class="contact-card">
                    <span class="contact-icon"><x-icon name="phone" /></span>
                    <h3>Call or text</h3>
                    <a href="tel:{{ $site['phone'] }}" class="contact-big">{{ $site['phone_display'] }}</a>
                    <p>Click to call — we answer fast</p>
                </div>
                <div class="contact-card">
                    <span class="contact-icon"><x-icon name="pin" /></span>
                    <h3>Our location</h3>
                    <address>
                        <strong>{{ $site['address']['street'] }}</strong><br>
                        {{ $site['address']['city'] }}, {{ $site['address']['region'] }}
                        {{ $site['address']['postal_code'] }}
                    </address>
                    <a href="{{ $site['maps_url'] }}" target="_blank" rel="noopener" class="contact-link">Get
                        directions <x-icon name="arrow" /></a>
                </div>
                <div class="contact-card">
                    <span class="contact-icon"><x-icon name="clock" /></span>
                    <h3>Business hours</h3>
                    <dl class="contact-hours">
                        @foreach ($site['hours'] as $h)
                            <div>
                                <dt>{{ $h['label'] }}</dt>
                                <dd>{{ $h['display'] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="contact-note">Same-day pickup available!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
