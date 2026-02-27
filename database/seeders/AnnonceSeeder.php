<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Annonce::create([
            'titre' => 'Annonce 1',
            'description' => 'Description 1',
            'type' => 'Appartement',
            'ville' => 'Casablanca',
            'superficie'=> 100,
            'neuf'=> true,
            'prix'=> 1000000.00,
        ]);
        Annonce::create([
            'titre'=> 'Annonce 2',
            'description' => 'Description 2',
            'type'=> 'Maison',
            'ville' => 'Rabat',
            'superficie'=> 200,
            'neuf' => false,
            'prix' => 2000000.00,
        ]);        
    }
}
