<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'title' => 'Twilight',
                'pays' => 'USA',
                'annee' => ("2024-07-08"),
                'duree' => '02:05:07',
                'genre' =>'Science-fiction',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Titanic',
                'pays' => 'USA',
                'annee' => ("2025-12-04"),
                'duree' => '03:14:00',
                'genre' =>'Science-fiction',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
