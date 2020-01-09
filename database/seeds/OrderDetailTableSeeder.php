<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$orderDetail = new OrderDetail;
		$orderDetail->cus_id = '33669';
		$orderDetail->pro_name = 'Quality 1';
		$orderDetail->unit_price = '10.00';
		$orderDetail->quantity = '1000';
		$orderDetail->total_price = '10000';
		$orderDetail->paid = '80000';
		$orderDetail->order_date = '2020-01-08';
		$orderDetail->sea_id = '9';
		$orderDetail->inserted_by = 'tanveershuvos@gmail.com';
		$orderDetail->save();

		$orderDetail = new OrderDetail;
		$orderDetail->cus_id = '927949';
		$orderDetail->pro_name = 'Quality 1';
		$orderDetail->unit_price = '12.00';
		$orderDetail->quantity = '5000';
		$orderDetail->total_price = '50000';
		$orderDetail->paid = '40000';
		$orderDetail->order_date = '2020-01-08';
		$orderDetail->sea_id = '5';
		$orderDetail->inserted_by = 'tanveer@gmail.com';
		$orderDetail->save();

		$orderDetail = new OrderDetail;
		$orderDetail->cus_id = '33688';
		$orderDetail->pro_name = 'Quality 2';
		$orderDetail->unit_price = '08.00';
		$orderDetail->quantity = '4000';
		$orderDetail->total_price = '60000';
		$orderDetail->paid = '80000';
		$orderDetail->order_date = '2020-01-09';
		$orderDetail->sea_id = '3';
		$orderDetail->inserted_by = 'shuvo@gmail.com';
		$orderDetail->save();

		$orderDetail = new OrderDetail;
		$orderDetail->cus_id = '559374';
		$orderDetail->pro_name = 'Quality 1';
		$orderDetail->unit_price = '10.00';
		$orderDetail->quantity = '1000';
		$orderDetail->total_price = '10000';
		$orderDetail->paid = '80000';
		$orderDetail->order_date = '2020-01-08';
		$orderDetail->sea_id = '9';
		$orderDetail->inserted_by = 'tanveershuvos@gmail.com';
		$orderDetail->save();

		$orderDetail = new OrderDetail;
		$orderDetail->cus_id = '33669';
		$orderDetail->pro_name = 'Quality 1';
		$orderDetail->unit_price = '10.00';
		$orderDetail->quantity = '1000';
		$orderDetail->total_price = '10000';
		$orderDetail->paid = '80000';
		$orderDetail->order_date = '2020-01-08';
		$orderDetail->sea_id = '9';
		$orderDetail->inserted_by = 'tanveershuvos@gmail.com';
		$orderDetail->save();

    }
}
