<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert(
            [
                [
                   "name"=> "Coding School",
                   "description" => "Devenir dev full stak en 6mois.",
                ],
                [
                    "name"=> "Photoshop",
                    "description" => "Devenir un pro de photoshop en 3jours.",
                 ],
                 [
                    "name"=> "Marketing Lab",
                    "description" => "Devenir un pro de réseaux sociaux en 6mois.",
                 ],
                 [
                    "name"=> "Web master",
                    "description" => "Développer ton projet en lien avec l'IT en 6mois.",
                 ],
                 [
                    "name"=> "worpress",
                    "description" => "Créer ton blog avec wordpress",
                 ],
                 [
                    "name"=> "Indesign",
                    "description" => "Apprends l'indesign en 3jours.",
                 ],
            ]

            );
    }
}
