<?php

namespace App\Http\Controllers;

use App\Models\SliderInfo;
use Illuminate\Http\Request;

class SliderInfoController extends Controller
{
    public function index()
    {
        $sliders = SliderInfo::orderBy('order')->get();
        return view('admins.slider-info.index', compact('sliders'));
    }

    public function create()
    {
        return view('admins.slider-info.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'animated_text' => 'required|string|max:100',
            'description' => 'nullable|string',
            'cta_button_text' => 'required|string|max:100',
            'secondary_button_text' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,bmp|max:2048',
            'order' => 'nullable|integer',
        ], [
            'image.image' => 'Le fichier doit être une image valide.',
            'image.mimes' => 'Le format d\'image doit être : JPG, PNG, GIF, WebP ou BMP.',
            'image.max' => 'L\'image ne doit pas dépasser 2 MB.',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slider', 'public');
            $validated['image'] = $imagePath;
        }

        if (!isset($validated['order'])) {
            $validated['order'] = SliderInfo::max('order') + 1 ?? 0;
        }

        SliderInfo::create($validated);

        return redirect()->route('slider-info.index')->with('success', 'Slide créé avec succès!');
    }

    public function edit(SliderInfo $sliderInfo)
    {
        return view('admins.slider-info.edit', compact('sliderInfo'));
    }

    public function update(Request $request, SliderInfo $sliderInfo)
    {
        $validated = $request->validate([
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'animated_text' => 'required|string|max:100',
            'description' => 'nullable|string',
            'cta_button_text' => 'required|string|max:100',
            'secondary_button_text' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,bmp|max:2048',
            'order' => 'nullable|integer',
        ], [
            'image.image' => 'Le fichier doit être une image valide.',
            'image.mimes' => 'Le format d\'image doit être : JPG, PNG, GIF, WebP ou BMP.',
            'image.max' => 'L\'image ne doit pas dépasser 2 MB.',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slider', 'public');
            $validated['image'] = $imagePath;
        }

        $sliderInfo->update($validated);

        return redirect()->route('slider-info.index')->with('success', 'Slide mis à jour avec succès!');
    }

    public function destroy(SliderInfo $sliderInfo)
    {
        $sliderInfo->delete();
        return redirect()->route('slider-info.index')->with('success', 'Slide supprimé avec succès!');
    }
}
