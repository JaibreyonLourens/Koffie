<?php

use Illuminate\Database\Seeder;

class LeaseSeeder extends Seeder
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
        $finances = \App\User::where('role_id', 3)->get();

        foreach($customers as $user) {
            for($i = 0; $i < $faker->numberBetween(1, 3); $i++) {
                \DB::table('leases')->insert([
                    'lease_type_id' => $faker->numberBetween(1, 2),
                    'customer_id'   => $user->id,
                    'finance_id'    => $finances->random()->id,
                    'monthly_costs' => $faker->randomFloat(2, 1000, 1000000),
                    'start_date'    => $faker->dateTimeBetween('-10 years', 'now'),
                    'end_date'      => $faker->dateTimeBetween('now', '+10 years'),
                    'created_at'    => $faker->dateTime,
                    'updated_at'    => $faker->dateTime
                ]);
            }
        }
    }
}
