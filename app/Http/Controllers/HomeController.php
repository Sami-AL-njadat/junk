<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Single-page marketing site: structured content for the home view.
 */
class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'title' => 'Cash for Junk Cars Chicago, IL | Free Towing | Titan | 331-341-4878',
            'metaDescription' => 'Cash for junk cars in Chicago, IL — free towing, same-day pickup, top dollar for any make or model. Call (331) 341-4878 for a free quote from Titan Cash For Junk Cars.',
            'heroStats' => [
                ['icon' => 'bi-currency-dollar', 'value' => '$2M+', 'label' => 'Paid Out'],
                ['icon' => 'bi-truck', 'value' => '5,000+', 'label' => 'Cars Picked Up'],
                ['icon' => 'bi-star-fill', 'value' => '500+', 'label' => '5-Star Reviews'],
            ],
            'steps' => [
                ['icon' => 'bi-telephone-fill', 'title' => 'Call', 'desc' => "Give us a call at (331) 341-4878 or fill out our online form with your vehicle's details.", 'num' => '01'],
                ['icon' => 'bi-clipboard-check', 'title' => 'Get A Quote', 'desc' => "We'll provide an instant, no-obligation cash offer based on the make, model, and condition.", 'num' => '02'],
                ['icon' => 'bi-cash-stack', 'title' => 'Get Paid Cash', 'desc' => 'We tow your car for free and hand you cash on the spot. Same-day service available.', 'num' => '03'],
            ],
            'features' => [
                ['icon' => 'bi-truck', 'title' => 'Free Towing', 'desc' => 'We never charge for pickup. The offer we give is the cash you keep.'],
                ['icon' => 'bi-clock-history', 'title' => 'Same-Day Pickup', 'desc' => 'Need it gone today? We offer rapid response across the Chicago area.'],
                ['icon' => 'bi-currency-dollar', 'title' => 'Top Dollar Paid', 'desc' => 'We constantly monitor market scrap prices to guarantee you the best offer.'],
                ['icon' => 'bi-car-front', 'title' => 'Any Make or Model', 'desc' => 'Running, wrecked, salvaged, or missing parts — we buy them all.'],
            ],
            'galleryCars' => [
                ['label' => 'Junk Sedans', 'image' => 'images/gallery/junk-sedans.webp', 'alt' => 'Damaged and broken-down junk sedan'],
                ['label' => 'Wrecked SUVs', 'image' => 'images/gallery/wrecked-suvs.webp', 'alt' => 'Wrecked SUV with heavy front-end damage'],
                ['label' => 'Old Trucks', 'image' => 'images/gallery/old-trucks.webp', 'alt' => 'Old worn pickup truck we buy for cash'],
                ['label' => 'Flood & Fire Damage', 'image' => 'images/gallery/flood-fire-damage.webp', 'alt' => 'Flood-submerged and storm-damaged vehicles'],
                ['label' => 'Non-Running Cars', 'image' => 'images/gallery/non-running.webp', 'alt' => 'Non-running car that will not start'],
                ['label' => 'Any Make & Model', 'image' => 'images/gallery/any-make-model.webp', 'alt' => 'Row of Mercedes-Benz vehicles — we buy every make and model'],
            ],
            'serviceAreas' => ['Chicago', 'Palos Hills', 'Orland Park', 'Tinley Park', 'Joliet', 'Naperville', 'Oak Lawn', 'Bridgeview', 'Burbank', 'Worth', 'Alsip', 'Harvey', 'Aurora', 'Bolingbrook', 'Cicero'],
        ]);
    }
}
