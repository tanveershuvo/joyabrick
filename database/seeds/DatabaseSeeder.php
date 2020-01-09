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
        $this->call([UserTableSeeder::class,
                        CompaniesTableSeeder::class,
                        CustomerDetailTableSeeder::class,
                        EmployeeDetailTableSeeder::class,
                        EmployeePaymentTableSeeder::class,
                        JalaniDetailTableSeeder::class,
                        MechinariesDetailTableSeeder::class,
                        OrderDetailTableSeeder::class,
                        OtherDetailTableSeeder::class,
                        ProductDetailTableSeeder::class,
                        SeasonTableSeeder::class,
                        SordarDeliveryStatusTableSeeder::class,
                        SordarDetailTableSeeder::class,
                        SordarPaymentTableSeeder::class,
                        SordarWeeklyBillTableSeeder::class]);


    }
}
