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
        \App\User::insert([
            'role_id'    => 6,
            'name'=> 'inkoop',
            'email'=> 'inkoop@barroc.nl',
            'password'=> Hash::make('barroc123')

        ]);

        \App\User::insert([
            'role_id'    => 3,
            'name'=> 'sales',
            'email'=> 'sales@barroc.nl',

            'password'=> Hash::make('barroc123')

        ]);

        \App\User::insert([
            'role_id'    => 2,
            'name'=> 'finance',
            'email'=> 'finance@barroc.nl',

            'password'=> Hash::make('barroc123')

        ]);

        \App\User::insert([
            'role_id'    => 1,
            'name'=> 'supplies',
            'email'=> 'supplies@barroc.nl',
            'password'=> Hash::make('barroc123')

        ]);

        \App\User::insert([
            'role_id'  => 4,
            'name'=> 'maintenance',
            'email'=> 'maintenance@barroc.nl',
            'password'=> Hash::make('barroc123')

        ]);

        \App\User::insert([
            'role_id'  => 5,
            'name'=> 'piet',
            'email'=> 'piet@barroc.nl',
            'password'=> Hash::make('barroc123')

        ]);
        \App\User::insert([
            'role_id'    => 7,
            'name'=> 'customer',
            'email'=> 'customer@barroc.nl',
            'password'=> Hash::make('barroc123')

        ]);
    }
}
