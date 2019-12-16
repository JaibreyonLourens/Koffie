<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $faker = \Faker\Factory::create();

        \DB::table('users')->insert([
            [
                'email' => 'admin@barroc.nl',
                'name'  => 'Admin Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 1,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email' => 'inkoop@barroc.nl',
                'name'  =>  'Inkoop Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 6,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email'  => 'sales@barroc.nl',
                'name'   => 'Sales Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'  => 2,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email'  => 'customer@campina.nl',
                'name'   => 'customer campina',
                'password' => Hash::make('barroc123'),
                'role_id'  => 7,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email'  => 'customer@curio.nl',
                'name'   => 'customer curio',
                'password' => Hash::make('barroc123'),
                'role_id'  => 7,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email'  => 'finance@barroc.nl',
                'name'   => 'Finance Medewerkers',
                'password' => Hash::make('barroc123'),
                'role_id'  => 3,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ],
            [
                'email'  => 'maintenance@barroc.nl',
                'name'   => 'Maintenance Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'  => 4,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ]
        ]);

        for ($i = 0; $i < 500; $i++) {
            \App\User::insert([
                'email'         => $faker->safeEmail,
                'name'          => $faker->name,
                'password'      => Hash::make('barroc123'),
                'role_id'       => $faker->numberBetween(2, 7),
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
    }
}
