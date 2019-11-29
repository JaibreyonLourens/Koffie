<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\Role::insert([
               'role' => 'Finance',
                'created_at'    => now(),
                'updated_at'    => now()
            ]);

        \App\Role::insert([
            'role' => 'Sales',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Role::insert([
            'role' => 'Inkoop',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Role::insert([
            'role' => 'Maintenance',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
