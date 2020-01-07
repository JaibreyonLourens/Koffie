<?php

use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $customers = \App\User::where('role_id', 7)->get();
        $sales = \App\User::where('role_id', 2)->get();

        foreach($customers as $user) {
            for($i = 0; $i < $faker->numberBetween(10, 20); $i++) {
                \DB::table('notes')->insert([
                    [
                        'sales_id'      => 3,
                        'customer_id'   => $sales->random()->id,
                        'content'       => $faker->text,
                        'created_at'    => now(),
                        'updated_at'    => now()
                    ]
                ]);
            }
        }
    }
}
