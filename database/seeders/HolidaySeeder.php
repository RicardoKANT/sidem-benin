<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Holiday;
use App\Models\SliderInfo;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = SliderInfo::all();

        if ($sliders->isEmpty()) {
            $this->command->info('Aucun slider trouvé. Veuillez d\'abord créer des sliders.');
            return;
        }

        $holidays = [
            ['name' => 'Jour de l\'an', 'month' => 1, 'day' => 1],
            ['name' => 'Saint Valentin', 'month' => 2, 'day' => 14],
            ['name' => 'Fête du Travail', 'month' => 5, 'day' => 1],
            ['name' => 'Jour de l\'indépendance (USA)', 'month' => 7, 'day' => 4],
            ['name' => 'Fête Nationale Bénin', 'month' => 8, 'day' => 1],
            ['name' => 'Halloween', 'month' => 10, 'day' => 31],
            ['name' => 'Noël', 'month' => 12, 'day' => 25],
        ];

        foreach ($holidays as $holiday) {
            Holiday::create([
                'name' => $holiday['name'],
                'month' => $holiday['month'],
                'day' => $holiday['day'],
                'slider_id' => $sliders->random()->id,
            ]);
        }

        $this->command->info('Fêtes internationales créées avec succès!');
    }
}

