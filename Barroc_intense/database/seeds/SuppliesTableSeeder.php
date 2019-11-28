<?php

use Illuminate\Database\Seeder;

class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('supplies')->insert(
        [
            [
                'name' => 'Espresso Beneficio',
                'ean_nr' => 'S239KLIUP',
                'description' => 'Een toegankelijke en zachte koffie.',
                'price_per_unit' => 21.60,
                'in_stock' => rand(1, 10)
            ],
            [
                'name' => 'Yellow Bourbon Brasil ',
                'ean_nr' => 'S239MNKLL',
                'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen.',
                'price_per_unit' => 23.20,
                'in_stock' => rand(1, 10)
            ],
            [
                'name' => 'Espresso Roma ',
                'ean_nr' => 'S239IPPSD',
                'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk',
                'price_per_unit' => 20.80,
                'in_stock' => rand(1, 10)
            ],
            [
                'name' => 'Red Honey Honduras',
                'ean_nr' => 'S239EVVFS ',
                'description' => 'De koffie is geproduceerd volgens de honey-methode ',
                'price_per_unit' => 27.80,
                'in_stock' => rand(1, 10)
            ]


            ]
        );
    }
}
