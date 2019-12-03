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
            'role' => 'admin',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
            \App\Role::insert([
               'role' => 'Finance',
                'created_at'    => now(),
                'updated_at'    => now()
            ]);

        \App\Role::insert([
            'role' => 'sales',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Role::insert([
            'role' => 'maintenance',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Role::insert([
            'role' => 'head_maintenance',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
        \App\Role::insert([
            'role' => 'inkoop',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Role::insert([
            'role' => 'Customer',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
