<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index(): View
    {
        return view('services');
    }

    /**
     * Display a specific service by slug.
     */
    public function show(string $slug): View
    {
        $services = [
            'web' => 'services-web',
            'mobile' => 'services-mobile',
            'design' => 'services-design',
            'consulting' => 'services-consulting',
            'support' => 'services-support',
            'marketing' => 'services-marketing',
        ];

        if (!isset($services[$slug])) {
            abort(404);
        }

        return view($services[$slug]);
    }
}
