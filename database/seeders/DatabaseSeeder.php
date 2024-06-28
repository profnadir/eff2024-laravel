<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('experts')->insert([
            [
                'nomExp' => 'Dupont',
                'prénomExp' => 'Jean',
                'télExp' => '0123456789',
                'SpécialitélExp' => 'Informatique',
                'EmailExp' => 'jean.dupont@example.com',
            ],
            [
                'nomExp' => 'Martin',
                'prénomExp' => 'Marie',
                'télExp' => '0987654321',
                'SpécialitélExp' => 'Biologie',
                'EmailExp' => 'marie.martin@example.com',
            ]
        ]);

        DB::table('evenements')->insert([
            [
                'thème' => 'Conférence sur l\'Informatique',
                'date_debut' => Carbon::parse('2024-07-01'),
                'date_fin' => Carbon::parse('2024-07-03'),
                'description' => 'Une conférence sur les nouvelles technologies en informatique.',
                'cout_joumalier' => 150.00,
                'expert_id' => 1,
            ],
            [
                'thème' => 'Atelier de Développement Web',
                'date_debut' => Carbon::parse('2024-08-10'),
                'date_fin' => Carbon::parse('2024-08-12'),
                'description' => 'Un atelier pratique sur le développement web moderne.',
                'cout_joumalier' => 200.00,
                'expert_id' => 1,
            ],
            [
                'thème' => 'Séminaire de Biologie',
                'date_debut' => Carbon::parse('2024-09-15'),
                'date_fin' => Carbon::parse('2024-09-17'),
                'description' => 'Un séminaire sur les dernières avancées en biologie.',
                'cout_joumalier' => 180.00,
                'expert_id' => 2,
            ],
            [
                'thème' => 'Workshop en Biotechnologie',
                'date_debut' => Carbon::parse('2024-10-20'),
                'date_fin' => Carbon::parse('2024-10-22'),
                'description' => 'Un workshop sur les applications de la biotechnologie.',
                'cout_joumalier' => 220.00,
                'expert_id' => 2,
            ]
        ]);


        $ateliers = [
            [
                'nomAtelier' => 'Atelier Informatique 1',
                'descriptionAtelier' => 'Description de l\'atelier Informatique 1',
                'evenement_id' => 1,
            ],
            [
                'nomAtelier' => 'Atelier Informatique 2',
                'descriptionAtelier' => 'Description de l\'atelier Informatique 2',
                'evenement_id' => 1,
            ],
            [
                'nomAtelier' => 'Atelier Développement Web 1',
                'descriptionAtelier' => 'Description de l\'atelier Développement Web 1',
                'evenement_id' => 2,
            ],
            [
                'nomAtelier' => 'Atelier Développement Web 2',
                'descriptionAtelier' => 'Description de l\'atelier Développement Web 2',
                'evenement_id' => 2,
            ],
            [
                'nomAtelier' => 'Atelier Biologie 1',
                'descriptionAtelier' => 'Description de l\'atelier Biologie 1',
                'evenement_id' => 3,
            ],
            [
                'nomAtelier' => 'Atelier Biologie 2',
                'descriptionAtelier' => 'Description de l\'atelier Biologie 2',
                'evenement_id' => 3,
            ],
            [
                'nomAtelier' => 'Workshop Biotechnologie 1',
                'descriptionAtelier' => 'Description de l\'atelier Biotechnologie 1',
                'evenement_id' => 4,
            ],
            [
                'nomAtelier' => 'Workshop Biotechnologie 2',
                'descriptionAtelier' => 'Description de l\'atelier Biotechnologie 2',
                'evenement_id' => 4,
            ],
        ];

        DB::table('ateliers')->insert($ateliers);
  
    }
}
