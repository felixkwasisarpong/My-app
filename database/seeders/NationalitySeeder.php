<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationalities = [
            'United Kingdom',
            'Ghana',
            'USA',
            'Germany',
            'Ukraine',
            'Russia'
        ];

        foreach ($nationalities as $nationality)
        {
            Nationality::create(['name' => $nationality]);
        }
    }
}
