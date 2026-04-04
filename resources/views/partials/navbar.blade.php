<header id="titan-navbar" class="titan-navbar fixed-top">
    <div class="titan-container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}#" class="d-flex align-items-center gap-3 text-decoration-none text-reset">
                <div
                    class="logo-box industrial-clip d-flex align-items-center justify-content-center overflow-hidden flex-shrink-0">
                    @include('partials.titan-logo', [
                        'class' => 'w-100 h-100 object-fit-contain p-1',
                        'width' => 48,
                        'height' => 48,
                    ])
                </div>
                <div class="d-flex flex-column lh-1">
                    <span class="font-display fw-bold tracking-wide text-foreground titan-nav-brand-title">
                        TITAN <span class="text-titan-primary">CASH</span>
                    </span>
                    <span class="text-muted-foreground fw-semibold text-uppercase mt-1 titan-nav-brand-sub">
                        For Junk Cars
                    </span>
                </div>
            </a>

            <nav class="d-none d-md-flex align-items-center titan-nav-links" aria-label="Primary">
                <a href="#how-it-works" class="nav-link text-decoration-none py-1 titan-underline-link">How It Works</a>
                <a href="#why-us" class="nav-link text-decoration-none py-1 titan-underline-link">Why Us</a>
                <a href="#service-area" class="nav-link text-decoration-none py-1 titan-underline-link">Service Area</a>
                <a href="#quote-form" class="nav-link text-decoration-none py-1 titan-underline-link">Contact Us</a>
            </nav>

            <div class="d-flex align-items-center gap-2">
                <button type="button" class="btn-theme-cycle d-inline-flex align-items-center gap-1" data-theme-cycle
                    title="Theme: click to switch (Light / Dark / Auto)">
                    <span data-theme-icon class="d-inline-flex align-items-center" aria-hidden="true">
                        <i class="bi bi-sun-fill theme-icon theme-icon--light"></i>
                        <i class="bi bi-moon-fill theme-icon theme-icon--dark d-none"></i>
                        <i class="bi bi-display theme-icon theme-icon--auto d-none"></i>
                    </span>
                    <span data-theme-label class="d-none d-sm-inline">Auto</span>
                </button>

                <a href="tel:+13313414878"
                    class="btn-titan-call btn-titan-call-nav industrial-clip d-none d-sm-inline-flex align-items-center gap-2 text-decoration-none box-glow">
                    <i class="bi bi-telephone-fill"></i>
                    <span>(331) 341-4878</span>
                </a>

                <button class="btn btn-link text-foreground d-md-none p-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#titanMobileNav" aria-controls="titanMobileNav" aria-label="Open menu">
                    <i class="bi bi-list fs-3"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-end offcanvas-titan text-foreground" tabindex="-1" id="titanMobileNav"
    aria-labelledby="titanMobileNavLabel">
    <div class="offcanvas-header border-bottom border-titan">
        <h2 class="visually-hidden" id="titanMobileNavLabel">Menu</h2>
        <button type="button" class="btn-theme-cycle d-inline-flex align-items-center gap-2" data-theme-cycle>
            <span data-theme-icon class="d-inline-flex align-items-center" aria-hidden="true">
                <i class="bi bi-sun-fill theme-icon theme-icon--light"></i>
                <i class="bi bi-moon-fill theme-icon theme-icon--dark d-none"></i>
                <i class="bi bi-display theme-icon theme-icon--auto d-none"></i>
            </span>
            <span data-theme-label>Auto</span>
        </button>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column align-items-center justify-content-center gap-4 py-5">
        <a href="#how-it-works" class="font-display fs-3 fw-bold text-decoration-none text-foreground">How It Works</a>
        <a href="#why-us" class="font-display fs-3 fw-bold text-decoration-none text-foreground">Why Us</a>
        <a href="#service-area" class="font-display fs-3 fw-bold text-decoration-none text-foreground">Service Area</a>
        <a href="#quote-form" class="font-display fs-3 fw-bold text-decoration-none text-foreground">Contact Us</a>
        <hr class="w-75 border-titan opacity-100">
        <a href="tel:+13313414878"
            class="btn-titan-call industrial-clip w-100 d-flex align-items-center justify-content-center gap-2 py-3 fs-5 text-decoration-none box-glow"
        >
            <i class="bi bi-telephone-fill fs-4"></i>
            <span>(331) 341-4878</span>
        </a>
    </div>
</div>
