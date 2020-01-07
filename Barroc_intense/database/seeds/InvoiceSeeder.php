<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
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
       $supply =\App\Supplies::all();
       $users = \App\User::all();

       foreach($leases as $lease)
       {
           for($i = 0; $i < 5; $i++)
           {
               \DB::table('invoices')->insert([
                   [
                      'lease_id'      => $lease->id,
                        'user_id'      => $users->random()->id,
                        'supply_id'      => $supply->random()->id,
                        'aantal' => $faker->numberBetween(10, 50),
                       'total' => $faker->numberBetween(10, 50),
                       'betaald_op'    => $faker->boolean ? $faker->dateTime : null,
                       'created_at'    => now(),
                       'updated_at'    => now()
                   ]
               ]);
           }
       }
    }
}
