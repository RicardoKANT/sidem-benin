<?php

namespace App\Http\Controllers;

use App\Models\SliderInfo;
use App\Models\Holiday;

class HomeController extends Controller
{
    public function index()
    {
        // Récupère le slider de la fête active
        // (affiche le jour de la fête + 3 jours après)
        $activeSlider = Holiday::getActiveSlider();

        // Si c'est une période de fête, affiche seulement le slider correspondant
        if ($activeSlider) {
            $sliders = collect([$activeSlider]);
        } else {
            // Sinon, affiche tous les sliders par ordre
            $sliders = SliderInfo::orderBy('order', 'asc')->get();
        }

        return view('welcome', compact('sliders'));
    }
}
