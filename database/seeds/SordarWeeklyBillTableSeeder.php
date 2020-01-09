<?php

use Illuminate\Database\Seeder;
use App\SordarWeeklyBill;

class SordarWeeklyBillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sordarWeeklyBill = new SordarWeeklyBill;
		$sordarWeeklyBill->weekly_bill_id = '4';
		$sordarWeeklyBill->sor_id = '260721';
		$sordarWeeklyBill->date = '2018-10-30';
		$sordarWeeklyBill->weekly_bill = '100';
		$sordarWeeklyBill->paid_by = 'tanveershuvos@gmail.com';
		$sordarWeeklyBill->pay_id = '67609977';
		$sordarWeeklyBill->sea_id = '11';
		$sordarWeeklyBill->save();

		$sordarWeeklyBill = new SordarWeeklyBill;
		$sordarWeeklyBill->weekly_bill_id = '5';
		$sordarWeeklyBill->sor_id = '726580';
		$sordarWeeklyBill->date = '2018-10-20';
		$sordarWeeklyBill->weekly_bill = '100';
		$sordarWeeklyBill->paid_by = 'tanveer@gmail.com';
		$sordarWeeklyBill->pay_id = '18994232';
		$sordarWeeklyBill->sea_id = '9';
		$sordarWeeklyBill->save();

		$sordarWeeklyBill = new SordarWeeklyBill;
		$sordarWeeklyBill->weekly_bill_id = '8';
		$sordarWeeklyBill->sor_id = '680908';
		$sordarWeeklyBill->date = '2019-10-03';
		$sordarWeeklyBill->weekly_bill = '1000';
		$sordarWeeklyBill->paid_by = 'shuvos@gmail.com';
		$sordarWeeklyBill->pay_id = '49768265';
		$sordarWeeklyBill->sea_id = '11';
		$sordarWeeklyBill->save();
    }
}
