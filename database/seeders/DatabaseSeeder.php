<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Option;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Option::create([
            'cod_opt' => 'AGE',
            'nom_opt' => 'Administration et gestion des entreprises'
        ]);

        Option::create([
            'cod_opt' => 'AGRO',
            'nom_opt' => 'Agronomie'
        ]);

        Option::create([
            'cod_opt' => 'RIT',
            'nom_opt' => 'Réseau Informatiques et Télécommunications'
        ]);

        Option::create([
            'cod_opt' => 'SIL',
            'nom_opt' => 'Systemes Informatiques et Logiciels'
        ]);
    }
}
