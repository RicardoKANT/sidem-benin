<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Holiday extends Model
{
    protected $fillable = [
        'name',
        'month',
        'day',
        'slider_id',
    ];

    /**
     * Fêtes internationales prédéfinies
     */
    public const PREDEFINED_HOLIDAYS = [
        ['name' => 'Jour de l\'an', 'month' => 1, 'day' => 1],
        ['name' => 'Fête du Travail', 'month' => 5, 'day' => 1],
        ['name' => 'Fête Nationale Bénin', 'month' => 8, 'day' => 1],
        ['name' => 'Noël', 'month' => 12, 'day' => 25],
        ['name' => 'Saint Valentin', 'month' => 2, 'day' => 14],
        ['name' => 'Halloween', 'month' => 10, 'day' => 31],
        ['name' => 'Jour de l\'indépendance (USA)', 'month' => 7, 'day' => 4],
    ];

    /**
     * Relation avec le slider
     */
    public function slider(): BelongsTo
    {
        return $this->belongsTo(SliderInfo::class, 'slider_id');
    }

    /**
     * Récupère la fête d'aujourd'hui
     */
    public static function getTodayHoliday(): ?self
    {
        $today = now();
        return static::where('month', $today->month)
            ->where('day', $today->day)
            ->first();
    }

    /**
     * Récupère la fête active (jour de la fête + 3 jours après)
     */
    public static function getActiveHoliday(): ?self
    {
        $today = now();

        // Parcourir toutes les fêtes
        $holidays = static::all();

        foreach ($holidays as $holiday) {
            // Créer la date de la fête
            $holidayDate = now()
                ->setMonth($holiday->month)
                ->setDay($holiday->day)
                ->startOfDay();

            // Créer la date limite (3 jours après la fête)
            $endDate = $holidayDate->copy()->addDays(3)->endOfDay();

            // Vérifier si aujourd'hui est entre la fête et la fête + 3 jours
            if ($today >= $holidayDate && $today <= $endDate) {
                return $holiday;
            }
        }

        return null;
    }

    /**
     * Récupère le slider associé à la fête active
     */
    public static function getActiveSlider()
    {
        $holiday = static::getActiveHoliday();
        return $holiday?->slider;
    }

    /**
     * Récupère le slider associé à la fête d'aujourd'hui
     */
    public static function getTodaySlider()
    {
        $holiday = static::getTodayHoliday();
        return $holiday?->slider;
    }
}
