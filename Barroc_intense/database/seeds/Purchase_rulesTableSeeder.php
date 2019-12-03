<?php

use Illuminate\Database\Seeder;

class Purchase_rulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $purchases = \App\Purchase::all();

        foreach($purchases as $p) {
            for($i = 0; $i < $faker->numberBetween(1, 5); $i++) {
                \DB::table('purchases_rules')->insert([
                    'purchase_id'   => $p->id,
                    'supply_id'     => $faker->numberBetween(1, 8),
                    'created_at'    => $faker->dateTime,
                    'updated_at'    => $faker->dateTime
                ]);
            }
        }
    }
}
