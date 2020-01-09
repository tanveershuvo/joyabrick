<?php

use Illuminate\Database\Seeder;
use App\SordarDeliveryStatus;

class SordarDeliveryStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sordarDelivery = new SordarDeliveryStatus;
		$sordarDelivery->receipt_no = 'WB021548';
		$sordarDelivery->delivery_date = '2018-11-21';
		$sordarDelivery->amount = '10000';
		$sordarDelivery->rate = '1.5';
		$sordarDelivery->total_bill = '10000';
		$sordarDelivery->inserted_by = 'Shanto';
		$sordarDelivery->sea_id = '11';
		$sordarDelivery->sor_id = '680908';
		$sordarDelivery->save();

		$sordarDelivery = new SordarDeliveryStatus;
		$sordarDelivery->receipt_no = 'WB021548';
		$sordarDelivery->delivery_date = '2018-11-21';
		$sordarDelivery->amount = '10000';
		$sordarDelivery->rate = '1.5';
		$sordarDelivery->total_bill = '10000';
		$sordarDelivery->inserted_by = 'Shanto';
		$sordarDelivery->sea_id = '11';
		$sordarDelivery->sor_id = '680908';
		$sordarDelivery->save();

		$sordarDelivery = new SordarDeliveryStatus;
		$sordarDelivery->receipt_no = 'WB99021548';
		$sordarDelivery->delivery_date = '2018-11-21';
		$sordarDelivery->amount = '10000';
		$sordarDelivery->rate = '1.5';
		$sordarDelivery->total_bill = '10000';
		$sordarDelivery->inserted_by = 'shuvos@gmail.com';
		$sordarDelivery->sea_id = '11';
		$sordarDelivery->sor_id = '680908';
		$sordarDelivery->save();

		$sordarDelivery = new SordarDeliveryStatus;
		$sordarDelivery->receipt_no = 'WB059427';
		$sordarDelivery->delivery_date = '2018-11-01';
		$sordarDelivery->amount = '10000';
		$sordarDelivery->rate = '1.5';
		$sordarDelivery->total_bill = '10000';
		$sordarDelivery->inserted_by = 'tanveershuvos@gmail.com';
		$sordarDelivery->sea_id = '11';
		$sordarDelivery->sor_id = '680908';
		$sordarDelivery->save();
    }
}
