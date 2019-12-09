<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuppliesTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PurchasestableSeeder::class);
        $this->call(Purchase_rulesTableSeeder::class);
        $this->call(CompanyDetailsSeeder::class);
        $this->call(leasetypeSeeder::class);
        $this->call(LeaseSeeder::class);
        $this->call(Lease_rulesSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
