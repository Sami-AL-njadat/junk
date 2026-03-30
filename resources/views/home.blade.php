@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="hero-section position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 end-0 bottom-0 z-0">
            <img
                src="https://images.unsplash.com/photo-1493238792000-8113da705763?w=1920&q=85"
                alt="Urban highway at dusk — Titan Cash For Junk Cars serves the Chicago area"
                class="w-100 h-100 object-fit-cover hero-bg-img"
                width="1920"
                height="1080"
            >
            <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background: linear-gradient(to right, hsl(var(--background) / 0.95), hsl(var(--background) / 0.7), transparent);"></div>
            <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background: linear-gradient(to top, hsl(var(--background)), transparent, hsl(var(--background) / 0.2));"></div>
            <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background: hsl(var(--primary) / 0.1); mix-blend-mode: multiply;"></div>
        </div>

        <div class="position-absolute top-0 bottom-0 start-0 z-1" style="width: 0.25rem; background: linear-gradient(to bottom, transparent, hsl(var(--primary)), transparent);"></div>

        <div class="hero-inner">
            <div class="row titan-hero-grid align-items-center">
                <div class="col-lg-6">
                    <div class="hero-badge">
                        <span class="titan-ping-dot position-relative d-inline-block rounded-circle bg-titan-primary flex-shrink-0" style="width: 0.625rem; height: 0.625rem;"></span>
                        <span class="text-uppercase text-titan-primary">Chicago's #1 Junk Car Buyers</span>
                    </div>

                    <h1 class="hero-title">
                        TURN YOUR<br>JUNK CAR<br>INTO <span class="text-titan-primary text-glow d-inline-block">CASH.</span>
                    </h1>

                    <p class="hero-lead text-muted-foreground">
                        We pay top dollar for any make, model, or condition. Running or not —
                        we come to you with cash in hand.
                    </p>

                    <div class="hero-pills">
                        @foreach (['Free Towing', 'Same-Day Pickup', 'Cash on the Spot'] as $item)
                            <span class="d-flex align-items-center" style="gap: 0.375rem;">
                                <span class="titan-pill-dot rounded-circle bg-titan-primary d-inline-block"></span>
                                {{ $item }}
                            </span>
                        @endforeach
                    </div>

                    <div class="hero-cta-row">
                        <a href="tel:+13313414878" class="btn-titan-hero-primary industrial-clip box-glow">
                            <i class="bi bi-telephone-fill fs-5"></i>
                            Call for Cash Offer
                        </a>
                        <a href="#how-it-works" class="btn-titan-hero-secondary industrial-clip">
                            See How It Works
                            <i class="bi bi-arrow-right fs-5"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="stats-panel industrial-clip stats-stack mb-0">
                        <p class="text-muted-foreground fw-bold text-uppercase mb-0 tracking-widest small">Trusted by thousands across Chicagoland</p>

                        <div class="stats-list">
                            @foreach ($heroStats as $row)
                                <div class="d-flex align-items-center" style="gap: 1.25rem;">
                                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center industrial-clip border stats-icon-wrap" style="width: 3.5rem; height: 3.5rem;">
                                        <i class="bi {{ $row['icon'] }} fs-4 text-titan-primary"></i>
                                    </div>
                                    <div>
                                        <p class="font-display fw-bold text-foreground mb-0 lh-1 text-titan-3xl">{{ $row['value'] }}</p>
                                        <p class="small text-muted-foreground text-uppercase tracking-wide mt-1 mb-0">{{ $row['label'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="border-top border-titan pt-4">
                            <a href="tel:+13313414878" class="d-flex align-items-center gap-3 text-titan-primary text-decoration-none stats-phone-link">
                                <i class="bi bi-telephone-fill fs-5"></i>
                                <div>
                                    <p class="font-display fw-bold tracking-wide mb-0 fs-5">(331) 341-4878</p>
                                    <p class="text-muted-foreground text-uppercase mb-0 small tracking-wide">Call or text anytime</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 end-0 z-1" style="height: 8rem; background: linear-gradient(to top, hsl(var(--background)), transparent);"></div>
    </section>

    {{-- How it works --}}
    <section id="how-it-works" class="section-py-24 bg-titan-card position-relative z-2 border-top border-bottom border-opacity-10" style="border-color: rgba(255,255,255,0.05) !important;">
        <div class="titan-container">
            <div class="text-center mb-titan-16">
                <h2 class="font-display fw-bold mb-4 titan-section-title">How It <span class="text-titan-primary">Works</span></h2>
                <p class="text-muted-foreground mx-auto titan-section-lead mb-0">
                    Three simple steps to turn your junk car into cash. No hassle, no stress.
                </p>
            </div>
            <div class="row titan-gutter-8">
                @foreach ($steps as $step)
                    <div class="col-md-4">
                        <div class="position-relative h-100 bg-titan-background border industrial-clip-reverse border-titan card-hover-border how-step-card p-titan-8">
                            <div class="position-absolute top-0 end-0 font-display fw-bold text-foreground user-select-none titan-step-watermark titan-step-watermark-hover">{{ $step['num'] }}</div>
                            <div class="d-flex align-items-center justify-content-center industrial-clip border mb-4 icon-step-box" style="width: 4rem; height: 4rem;">
                                <i class="bi {{ $step['icon'] }} fs-3 text-titan-primary"></i>
                            </div>
                            <h3 class="font-display fs-4 fw-bold text-foreground mb-3">{{ $step['title'] }}</h3>
                            <p class="text-muted-foreground mb-0 lh-lg">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why us --}}
    <section id="why-us" class="section-py-24 bg-titan-background position-relative overflow-hidden">
        <div class="position-absolute top-50 start-50 translate-middle rounded-circle bg-titan-primary opacity-10 pointer-events-none blur-titan-blob"></div>
        <div class="titan-container position-relative z-1">
            <div class="row titan-hero-grid align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-display fw-bold mb-4 titan-section-title">Why <span class="text-titan-primary">Titan?</span></h2>
                    <p class="titan-section-body text-muted-foreground mb-4 lh-lg">
                        Selling a junk car shouldn't feel like a sketchy transaction. At Titan Cash For Junk Cars, we've built our reputation on transparency, speed, and paying the highest possible rates in the industry.
                    </p>
                    <div class="d-none d-lg-block bg-titan-card border industrial-clip p-titan-6 mt-4 offer-guarantee-box" style="border-color: rgba(255,255,255,0.1) !important;">
                        <p class="font-display fs-5 fw-bold text-foreground mb-2">We Beat Any Written Offer</p>
                        <p class="text-muted-foreground small mb-0">Bring us a legitimate quote from a competitor and we'll beat it. That's the Titan Guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row titan-gutter-6">
                        @foreach ($features as $f)
                            <div class="col-sm-6">
                                <div class="h-100 bg-titan-card bg-opacity-50 border border-opacity-10 feature-tile p-titan-8" style="--bs-bg-opacity: 0.5; border-color: rgba(255,255,255,0.05) !important; backdrop-filter: blur(6px);">
                                    <div class="d-flex align-items-center justify-content-center border rounded-1 mb-4 icon-feature-box" style="width: 3rem; height: 3rem;">
                                        <i class="bi {{ $f['icon'] }} fs-5 text-foreground"></i>
                                    </div>
                                    <h4 class="font-display fw-bold text-foreground fs-6 mb-2">{{ $f['title'] }}</h4>
                                    <p class="text-muted-foreground small mb-0">{{ $f['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="section-py-24 bg-titan-card border-top border-bottom border-opacity-10 position-relative overflow-hidden" style="border-color: rgba(255,255,255,0.05) !important;">
        <div class="position-absolute top-50 start-50 translate-middle rounded-circle bg-titan-primary opacity-10 pointer-events-none blur-titan-blob-sm"></div>
        <div class="titan-container position-relative z-1">
            <div class="text-center mb-titan-14">
                <p class="text-titan-primary fw-bold text-uppercase small mb-3" style="letter-spacing: 0.14em;">All Conditions Welcome</p>
                <h2 class="font-display fw-bold mb-4 titan-section-title">Cars We <span class="text-titan-primary">Buy</span></h2>
                <p class="text-muted-foreground mx-auto titan-section-lead mb-0">
                    Running or not, wrecked, flooded, or just plain old — we buy all types of vehicles across the Chicago area.
                </p>
            </div>
            <div class="row titan-gutter-8">
                @foreach ($galleryCars as $car)
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery-card bg-titan-background border industrial-clip border-titan overflow-hidden h-100 card-hover-border">
                            <div class="position-relative overflow-hidden gallery-img-wrap">
                                <img src="{{ asset($car['image']) }}" alt="{{ $car['alt'] }}" class="gallery-img w-100 h-100 object-fit-cover" width="1400" loading="lazy" decoding="async" style="filter: grayscale(0.2);">
                                <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background: linear-gradient(to top, hsl(var(--background) / 0.8), transparent);"></div>
                                <span class="position-absolute btn-titan-call industrial-clip text-decoration-none titan-gallery-badge">We Buy This</span>
                            </div>
                            <div class="p-titan-8 d-flex align-items-center gap-3">
                                <span class="bg-titan-primary d-inline-block flex-shrink-0" style="width: 0.35rem; height: 1.5rem;"></span>
                                <h3 class="font-display fw-bold text-foreground fs-6 mb-0 tracking-wide">{{ $car['label'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Service area --}}
    <section id="service-area" class="section-service-area section-service-area-v2 section-py-24 position-relative overflow-hidden">
        <div class="service-area-bg" aria-hidden="true"></div>
        <div class="titan-container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <header class="text-center mb-4 mb-md-5">
                        <div class="service-area-kicker d-inline-flex align-items-center gap-2 mx-auto mb-3">
                            <span class="service-area-kicker-icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                <i class="bi bi-geo-alt-fill"></i>
                            </span>
                            <span>Free towing across Chicagoland</span>
                        </div>
                        <h2 class="font-display fw-bold titan-section-title mb-3 service-area-title">
                            Proudly serving <span class="service-area-title-accent">greater Chicago</span>
                        </h2>
                        <p class="service-area-desc mx-auto mb-0">
                            Wherever your vehicle is parked in the metro area, our trucks come to you—fast, free, and efficient.
                        </p>
                    </header>

                    <div class="service-area-panel shadow-lg">
                        <div class="row g-2 g-md-3">
                            @foreach ($serviceAreas as $area)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="service-area-city h-100 d-flex align-items-center justify-content-center text-center">
                                        <span class="d-block text-uppercase small fw-bold tracking-wide lh-sm">{{ $area }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="service-area-footer text-center">
                            <span class="service-area-footer-text text-uppercase small fw-bold tracking-widest">And surrounding suburbs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="section-py-24 bg-titan-card border-top border-opacity-10 quote-form-section" style="border-color: rgba(255,255,255,0.05) !important;">
        <span id="quote-form" class="visually-hidden">Get a quote</span>
        <div class="titan-container">
            <div class="text-center mb-titan-16">
                <h2 class="font-display fw-bold mb-4 titan-section-title">Contact <span class="text-titan-primary">Us</span></h2>
                <p class="text-muted-foreground mx-auto titan-section-lead mb-0">
                    Ready to get cash for your junk car? Reach out to us today — we're fast, friendly, and always fair.
                </p>
            </div>
            <div class="row titan-gutter-8">
                <div class="col-md-4">
                    <div class="bg-titan-background border text-center h-100 card-hover-border border-titan p-titan-8">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-5 border" style="width: 3.5rem; height: 3.5rem; background: hsl(var(--primary) / 0.1); border-color: hsl(var(--primary) / 0.2) !important;">
                            <i class="bi bi-telephone-fill fs-4 text-titan-primary"></i>
                        </div>
                        <h3 class="fs-5 fw-bold text-foreground mb-3">Call Us</h3>
                        <a href="tel:+13313414878" class="fs-4 fw-bold text-titan-primary text-decoration-none">1 (331) 341-4878</a>
                        <p class="text-muted-foreground small mt-2 mb-0">Click to call — we answer fast</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-titan-background border text-center h-100 card-hover-border border-titan p-titan-8">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-5 border" style="width: 3.5rem; height: 3.5rem; background: hsl(var(--primary) / 0.1); border-color: hsl(var(--primary) / 0.2) !important;">
                            <i class="bi bi-geo-alt fs-4 text-titan-primary"></i>
                        </div>
                        <h3 class="fs-5 fw-bold text-foreground mb-3">Our Location</h3>
                        <address class="not-italic text-muted-foreground lh-lg mb-0">
                            <p class="text-foreground fw-semibold mb-0">9731 S 90th Ave</p>
                            <p class="mb-0">Palos Hills, IL 60465</p>
                        </address>
                        <p class="text-muted-foreground small mt-2 mb-0">Serving all Chicago area</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-titan-background border text-center h-100 card-hover-border border-titan p-titan-8">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-5 border" style="width: 3.5rem; height: 3.5rem; background: hsl(var(--primary) / 0.1); border-color: hsl(var(--primary) / 0.2) !important;">
                            <i class="bi bi-clock fs-4 text-titan-primary"></i>
                        </div>
                        <h3 class="fs-5 fw-bold text-foreground mb-3">Business Hours</h3>
                        <ul class="list-unstyled text-muted-foreground small mb-0">
                            <li><span class="text-foreground fw-medium">Mon – Sat:</span> 8:00 AM – 8:00 PM</li>
                            <li><span class="text-foreground fw-medium">Sunday:</span> 10:00 AM – 6:00 PM</li>
                        </ul>
                        <p class="text-titan-primary small fw-semibold mt-3 mb-0">Same-day pickup available!</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-titan-12">
                <a href="tel:+13313414878" class="btn-titan-call btn-titan-contact-cta industrial-clip d-inline-flex align-items-center gap-3 fw-bold text-uppercase text-decoration-none tracking-widest">
                    <i class="bi bi-telephone-fill fs-4"></i>
                    Call 1 (331) 341-4878
                </a>
            </div>
        </div>
    </section>
@endsection
