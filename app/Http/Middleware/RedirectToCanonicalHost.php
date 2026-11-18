<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * 301-redirect "www." requests to the bare domain so search engines see a
 * single copy of the site (www.titan-cash-for-junk-cars.com used to serve a
 * full duplicate with a 200).
 */
class RedirectToCanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if (str_starts_with($host, 'www.')) {
            $canonicalHost = parse_url(config('titan.url'), PHP_URL_HOST);
            $target = $canonicalHost === substr($host, 4)
                ? config('titan.url')
                : $request->getScheme().'://'.substr($host, 4);

            return redirect()->to($target.$request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
