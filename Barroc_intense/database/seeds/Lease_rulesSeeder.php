<?php

use Illuminate\Database\Seeder;

class Lease_rulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $leases = \App\Lease::all();
        $supplies = \App\Supplies::all();

        foreach($leases as $lease)
        {
            for($i = 0; $i < 150; $i++)
            {
                \DB::table('lease_rules')->insert([
                    [
                        'lease_id'  => $lease->id,
                        'supply_id' => $supplies->random()->id,
                        'created_at'    => now(),
                        'updated_at'    => now()
                    ]
                ]);

            }
        }
    }
}
