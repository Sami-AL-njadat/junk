# Titan Cash For Junk Cars

Single-page marketing site for [titan-cash-for-junk-cars.com](https://titan-cash-for-junk-cars.com) — Laravel 11 + Vite, no CSS/JS framework.

## Where things live

| What | Where |
| --- | --- |
| Business details (phone, address, hours, GTM id) | `config/titan.php` |
| Page copy, FAQ, gallery, JSON-LD structured data | `app/Http/Controllers/HomeController.php` |
| Markup | `resources/views/home.blade.php`, `resources/views/partials/*`, `resources/views/layouts/app.blade.php` |
| Styles (brand tokens at the top) | `resources/css/app.css` |
| Theme toggle, sticky header, mobile menu | `resources/js/titan.js` |
| Icons (inline SVG sprite, use `<x-icon name="phone" />`) | `resources/views/partials/icon-sprite.blade.php` |
| Self-hosted font (Archivo variable, OFL) | `public/fonts/` |
| SEO files | `public/robots.txt`, `public/sitemap.xml`, `public/site.webmanifest`, `public/images/og-image.jpg` |

Logo: `public/images/logo.svg` (crest; `logo.png` for Google), compact version for small sizes in `public/favicon.svg`.

Palette (tokens at the top of `resources/css/app.css`): logo red `#D62839` for buttons and accents, soft navy `#1B2741` for dark bands and the footer, white and light gray `#F5F7FB` backgrounds, green checkmarks, yellow review stars.

`www.` requests are 301-redirected to the bare domain by `app/Http/Middleware/RedirectToCanonicalHost.php`.

## Run locally

```bash
composer install
npm ci
cp .env.example .env   # set SESSION_DRIVER=file and CACHE_STORE=file if you don't want a database
php artisan key:generate
npm run build
php artisan serve
```

## Tests

```bash
php artisan test
```

## Deploy

`public/build` is not committed, so assets must be built on (or uploaded to) the server:

```bash
git pull
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan optimize        # caches config (incl. config/titan.php), routes and views
```

Recommended nginx additions for speed: gzip for `text/html text/css application/javascript image/svg+xml application/json`,
and `Cache-Control: public, max-age=31536000, immutable` for `/build/`, plus a long cache for `/images/` and `/fonts/`.
