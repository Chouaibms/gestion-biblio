<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pas besoin d'importer DB ici

class LivreSeeder extends Seeder
{
    public function run()
    {
        // Utilisez directement la classe DB sans l'importer
        DB::table("livres")->insert([
            ['titre' => "le petit prince", 'at_pub' => 1943, 'nb_pages' => 93, 'id_auteur' => 1],
            ['titre' => "les fleurs du mal", 'at_pub' => 1857, 'nb_pages' => 256, 'id_auteur' => 2],
            ['titre' => "les miserables", 'at_pub' => 1862, 'nb_pages' => 2598, 'id_auteur' => 3]
        ]);
    }
}
