const STORAGE_KEY = "titan-theme-mode";
const MODES = ["light", "dark", "auto"];
const darkQuery = window.matchMedia("(prefers-color-scheme: dark)");

function storedMode() {
    try {
        const v = localStorage.getItem(STORAGE_KEY);
        return MODES.includes(v) ? v : "auto";
    } catch {
        return "auto";
    }
}

function applyTheme(mode) {
    const html = document.documentElement;
    const dark = mode === "dark" || (mode === "auto" && darkQuery.matches);
    html.setAttribute("data-theme", dark ? "dark" : "light");
    html.setAttribute("data-theme-mode", mode);
    document.querySelectorAll("[data-theme-toggle]").forEach((btn) => {
        const label = mode.charAt(0).toUpperCase() + mode.slice(1);
        btn.setAttribute("aria-label", `Color theme: ${label}`);
        btn.title = `Theme: ${label} (click to change)`;
    });
}

function initTheme() {
    applyTheme(storedMode());
    darkQuery.addEventListener("change", () => {
        if (storedMode() === "auto") applyTheme("auto");
    });
    document.querySelectorAll("[data-theme-toggle]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const next = MODES[(MODES.indexOf(storedMode()) + 1) % MODES.length];
            try {
                localStorage.setItem(STORAGE_KEY, next);
            } catch {
                /* private mode: theme still changes for this page view */
            }
            applyTheme(next);
        });
    });
}

function initHeader() {
    const header = document.querySelector("[data-header]");
    if (!header) return;

    let ticking = false;
    const update = () => {
        header.classList.toggle("is-scrolled", window.scrollY > 24);
        ticking = false;
    };
    window.addEventListener(
        "scroll",
        () => {
            if (!ticking) {
                ticking = true;
                requestAnimationFrame(update);
            }
        },
        { passive: true },
    );
    update();

    const toggle = header.querySelector("[data-menu-toggle]");
    if (!toggle) return;
    const setOpen = (open) => {
        header.classList.toggle("nav-open", open);
        toggle.setAttribute("aria-expanded", String(open));
        toggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    };
    toggle.addEventListener("click", () => setOpen(!header.classList.contains("nav-open")));
    header.querySelectorAll(".mobile-nav a").forEach((a) => a.addEventListener("click", () => setOpen(false)));
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && header.classList.contains("nav-open")) {
            setOpen(false);
            toggle.focus();
        }
    });
    window.matchMedia("(min-width: 1080px)").addEventListener("change", (e) => {
        if (e.matches) setOpen(false);
    });
}

/** Hide the sticky mobile call bar while the hero's own call buttons are on screen. */
function initMobileCta() {
    const bar = document.querySelector("[data-mobile-cta]");
    const heroCta = document.querySelector("[data-hero-cta]");
    if (!bar || !heroCta || !("IntersectionObserver" in window)) return;
    new IntersectionObserver(([entry]) => {
        bar.classList.toggle("is-hidden", entry.isIntersecting);
    }).observe(heroCta);
}

initTheme();
initHeader();
initMobileCta();
