<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use App\Models\SliderInfo;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holidays = Holiday::with('slider')->paginate(15);
        return view('admins.holidays.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $predefinedHolidays = Holiday::PREDEFINED_HOLIDAYS;
        $sliders = SliderInfo::all();
        $assignedHolidays = Holiday::pluck('name')->toArray();

        return view('admins.holidays.create', compact('predefinedHolidays', 'sliders', 'assignedHolidays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'month' => 'required|integer|min:1|max:12',
            'day' => 'required|integer|min:1|max:31',
            'slider_id' => 'required|exists:slider_infos,id',
        ]);

        Holiday::updateOrCreate(
            ['month' => $validated['month'], 'day' => $validated['day']],
            $validated
        );

        return redirect()->route('holidays.index')
            ->with('success', 'Fête assignée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Holiday $holiday)
    {
        $holiday->load('slider');
        return view('admins.holidays.show', compact('holiday'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holiday $holiday)
    {
        $sliders = SliderInfo::all();
        return view('admins.holidays.edit', compact('holiday', 'sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Holiday $holiday)
    {
        $validated = $request->validate([
            'slider_id' => 'required|exists:slider_infos,id',
        ]);

        $holiday->update($validated);

        return redirect()->route('holidays.index')
            ->with('success', 'Fête mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holiday $holiday)
    {
        $holiday->delete();

        return redirect()->route('holidays.index')
            ->with('success', 'Fête supprimée avec succès!');
    }
}
