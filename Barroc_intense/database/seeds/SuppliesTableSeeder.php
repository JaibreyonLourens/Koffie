<?php

use Illuminate\Database\Seeder;

class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Supplies::insert([
            'name' => 'Rubber (10mm)',
            'price' => 00.39,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'Rubber (10mm)',
            'price' => 00.45,
            'units' => 0,
            'available' => false,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'slang',
            'price' => 4.45,
            'units' => 10,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'voeding',
            'price' => 68.69,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'Ontkalker',
            'price' => 4,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'Waterfilter',
            'price' => 299.45,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'Reservoir sensor',
            'price' => 89.99,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \App\Supplies::insert([
            'name' => 'Druppelstop',
            'price' =>  122.43,
            'units' => 100,
            'available' => true,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

    }
}
