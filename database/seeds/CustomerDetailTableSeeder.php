<?php

use Illuminate\Database\Seeder;
use App\CustomerDetail;

class CustomerDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Rony';
		$customerDetail->cus_address = 'Dhaka';
		$customerDetail->cus_phone = '+8801852654284';
		$customerDetail->save();

		$customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Hridoy';
		$customerDetail->cus_address = 'Nilkhet';
		$customerDetail->cus_phone = '+8801652694244';
		$customerDetail->save();

		$customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Tonmoy';
		$customerDetail->cus_address = 'Damra';
		$customerDetail->cus_phone = '+8801952654280';
		$customerDetail->save();

		$customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Robin';
		$customerDetail->cus_address = 'Farmgate';
		$customerDetail->cus_phone = '+8801752654243';
		$customerDetail->save();

		$customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Sumon';
		$customerDetail->cus_address = 'Khulna';
		$customerDetail->cus_phone = '+8801852654287';
		$customerDetail->save();

		$customerDetail= new CustomerDetail;
		$customerDetail->cus_name = 'Sajib';
		$customerDetail->cus_address = 'Cumilla';
		$customerDetail->cus_phone = '+8801652654249';
		$customerDetail->save();

    }
}
