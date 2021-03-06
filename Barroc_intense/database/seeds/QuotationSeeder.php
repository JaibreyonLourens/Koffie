<?php

use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
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
            for($i = 0; $i < $faker->numberBetween(10, 30); $i++) {
                \DB::table('quotations')->insert([
                    [
                        'sales_id'          => $sales->random()->id,
                        'customer_id'       => $user->id,
                        'content'           => $faker->text,
                        'pricing'           => $faker->numerify("Installatiekosten ###,- & leasekosten maandelijks á ###,-"),
                        'finance_approved'  => $faker->boolean,
                        'customer_approved' => $faker->boolean,
                        'created_at'        => now(),
                        'updated_at'        => now(),
                    ]
                ]);
            }
        }
    }
}
