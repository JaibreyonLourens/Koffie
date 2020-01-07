<?php

use Illuminate\Database\Seeder;

class PurchasestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $buyers = \App\User::where('role_id', 6)->get();

        foreach($buyers as $user) {
            for($i = 0; $i < $faker->numberBetween(1, 20); $i++) {
                \DB::table('purchases')->insert([
                    'user_id'       => $user->id,
                    'created_at'    => now(),
                    'updated_at'    => now()
                ]);
            }
        }
    }
}
