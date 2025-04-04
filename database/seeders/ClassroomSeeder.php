<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::create([
            'num_class' => '101',
            'semester' => '2025-1',
            'period_day' => 'Manhã',
        ]);
        Classroom::create([
            'num_class' => '102',
            'semester' => '2025-1',
            'period_day' => 'Tarde',
        ]);
        Classroom::create([
            'num_class' => '103',
            'semester' => '2025-2',
            'period_day' => 'Manhã',
        ]);
        Classroom::create([
            'num_class' => '104',
            'semester' => '2025-2',
            'period_day' => 'Noite',
        ]);
        Classroom::create([
            'num_class' => '105',
            'semester' => '2025-1',
            'period_day' => 'Tarde',
        ]);
    }
}
