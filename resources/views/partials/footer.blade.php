<footer class="bg-titan-background border-top border-titan footer-titan mt-auto">
    <div class="titan-container">
        <div class="row g-5 mb-titan-16">
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div
                        class="logo-box industrial-clip d-flex align-items-center justify-content-center overflow-hidden flex-shrink-0">
                        @include('partials.titan-logo', [
                            'class' => 'w-100 h-100 object-fit-contain p-1',
                            'width' => 40,
                            'height' => 40,
                        ])
                    </div>
                    <span class="font-display fs-5 fw-bold tracking-wide text-foreground">
                        TITAN <span class="text-titan-primary">CASH</span>
                    </span>
                </div>
                <p class="text-muted-foreground small lh-lg mb-0">
                    Chicago's most trusted junk car buyer. We pay top dollar for vehicles in any condition, with free
                    towing always included.
                </p>
            </div>
            <div class="col-md-6 col-lg-3">
                <h4 class="font-display fw-bold text-foreground fs-6 mb-4">Contact Us</h4>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                    <li>
                        <a href="tel:+13313414878"
                            class="footer-phone d-flex align-items-start gap-2 text-muted-foreground text-decoration-none">
                            <i class="bi bi-telephone-fill text-titan-primary flex-shrink-0"></i>
                            <span class="fw-bold text-foreground">1 (331) 341-4878</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-start gap-2 text-muted-foreground small">
                        <i class="bi bi-geo-alt text-titan-primary flex-shrink-0 mt-1"></i>
                        <span>9731 S 90th Ave<br>Palos Hills, IL 60465</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h4 class="font-display fw-bold text-foreground fs-6 mb-4">Hours</h4>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-start gap-2 text-muted-foreground small">
                        <i class="bi bi-clock text-titan-primary flex-shrink-0"></i>
                        <div>
                            <p class="mb-1 d-flex justify-content-between gap-3" style="width: 10rem;"><span
                                    class="text-foreground">Mon-Sat:</span> <span>8am - 8pm</span></p>
                            <p class="mb-0 d-flex justify-content-between gap-3" style="width: 10rem;"><span
                                    class="text-foreground">Sunday:</span> <span>10am - 6pm</span></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h4 class="font-display fw-bold text-foreground fs-6 mb-4">Quick Links</h4>
                <ul
                    class="list-unstyled d-flex flex-column gap-2 small fw-semibold text-uppercase text-muted-foreground">
                    <li><a href="#how-it-works" class="text-decoration-none text-muted-foreground link-titan">How It
                            Works</a></li>
                    <li><a href="#why-us" class="text-decoration-none text-muted-foreground link-titan">Why Choose
                            Us</a></li>
                    <li><a href="#service-area" class="text-decoration-none text-muted-foreground link-titan">Service
                            Area</a></li>
                    <li><a href="#quote-form" class="text-decoration-none text-muted-foreground link-titan">Get A
                            Quote</a></li>
                </ul>
            </div>
        </div>
        <div
            class="border-top border-titan footer-titan-bottom d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <p class="text-muted-foreground small fw-bold text-uppercase mb-0" style="letter-spacing: 0.08em;">
                &copy; {{ now()->year }} Titan Cash For Junk Cars. All rights reserved.
            </p>
            <div class="text-muted-foreground small fw-bold text-uppercase d-flex gap-4">
                <a href="#" class="text-decoration-none text-muted-foreground link-titan-footer">Privacy
                    Policy</a>
                <a href="#" class="text-decoration-none text-muted-foreground link-titan-footer">Terms of
                    Service</a>
            </div>
        </div>
    </div>
</footer>
