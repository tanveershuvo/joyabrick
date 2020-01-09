<?php

use Illuminate\Database\Seeder;
use App\SordarPayment;

class SordarPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sordarPayment = new SordarPayment;
		$sordarPayment->sor_id = '680908';
		$sordarPayment->pay_id = '01948975';
		$sordarPayment->advance = '50000';
		$sordarPayment->date = '2018-11-21';
		$sordarPayment->sea_id = '11';
		$sordarPayment->save();

		$sordarPayment = new SordarPayment;
		$sordarPayment->sor_id = '260721';
		$sordarPayment->pay_id = '18994232';
		$sordarPayment->advance = '50000';
		$sordarPayment->date = '2018-11-11';
		$sordarPayment->sea_id = '11';
		$sordarPayment->save();

		$sordarPayment = new SordarPayment;
		$sordarPayment->sor_id = '726580';
		$sordarPayment->pay_id = '49768265';
		$sordarPayment->advance = '50000';
		$sordarPayment->date = '2018-10-21';
		$sordarPayment->sea_id = '11';
		$sordarPayment->save();


    }
}
