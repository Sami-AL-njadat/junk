const STORAGE_KEY = "titan-theme-mode";
const MODES = ["light", "dark", "auto"];

function getStoredMode() {
    const v = localStorage.getItem(STORAGE_KEY);
    return MODES.includes(v) ? v : "auto";
}

function resolveBsTheme(mode) {
    if (mode === "dark") return "dark";
    if (mode === "light") return "light";
    return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
}

function applyTheme(mode) {
    const html = document.documentElement;
    html.setAttribute("data-titan-theme", mode);
    html.setAttribute("data-bs-theme", resolveBsTheme(mode));

    document.querySelectorAll("[data-theme-label]").forEach((el) => {
        el.textContent = mode.charAt(0).toUpperCase() + mode.slice(1);
    });

    const icons = document.querySelectorAll("[data-theme-icon]");
    icons.forEach((el) => {
        el.querySelectorAll(".theme-icon").forEach((i) => i.classList.add("d-none"));
        const show = el.querySelector(`.theme-icon--${mode}`);
        if (show) show.classList.remove("d-none");
    });
}

function cycleTheme() {
    const cur = getStoredMode();
    const next = MODES[(MODES.indexOf(cur) + 1) % MODES.length];
    localStorage.setItem(STORAGE_KEY, next);
    applyTheme(next);
}

function initTheme() {
    applyTheme(getStoredMode());
    window
        .matchMedia("(prefers-color-scheme: dark)")
        .addEventListener("change", () => {
            if (getStoredMode() === "auto") applyTheme("auto");
        });

    document.querySelectorAll("[data-theme-cycle]").forEach((btn) => {
        btn.addEventListener("click", cycleTheme);
    });
}

function initNavbarScroll() {
    const nav = document.getElementById("titan-navbar");
    if (!nav) return;
    const onScroll = () => {
        if (window.scrollY > 20) nav.classList.add("navbar-scrolled");
        else nav.classList.remove("navbar-scrolled");
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
}

function initPreloader() {
    const el = document.getElementById("preloader");
    if (!el) return;
    window.setTimeout(() => {
        el.classList.add("preloader--hidden");
        window.setTimeout(() => el.remove(), 750);
    }, 2200);
}

document.addEventListener("DOMContentLoaded", () => {
    initTheme();
    initNavbarScroll();
    initPreloader();
});
