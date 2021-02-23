<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert(
            [
                [
                    "name"=> "Professionnalisante"
                ],
                [
                    "name"=> "Initiation"
                ],
                [
                    "name"=> "Gestion de projet"
                ],
                [
                    "name"=> "Marketing"
                ],
                [
                    "name"=> "Developpement web"
                ],
                [
                    "name"=> "Gestion de réseaux"
                ],
                [
                    "name"=> "Design"
                ],
                [
                    "name"=> "Réseaux sociaux"
                ],
                [
                    "name"=> "Photo"
                ],
                [
                    "name"=> "Gestion d'équipe"
                ],
                [
                    "name"=> "Sécurité"
                ],
            ]
            );
    }
}
