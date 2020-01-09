<?php

use Illuminate\Database\Seeder;
use App\OtherDetail;

class OtherDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$otherDetail = new OtherDetail;
		$otherDetail->rate = '12';
		$otherDetail->quantity = '12';
		$otherDetail->name = 'saa';
		$otherDetail->receipt = '1111';
		$otherDetail->date = '2019-01-17';
		$otherDetail->o_id = '1';
		$otherDetail->save();

        $otherDetail = new OtherDetail;
        $otherDetail->rate = '10';
        $otherDetail->quantity = '15';
        $otherDetail->name = 'ddd';
        $otherDetail->receipt = '11199';
        $otherDetail->date = '2019-01-20';
        $otherDetail->o_id = '2';
        $otherDetail->save();

        $otherDetail = new OtherDetail;
        $otherDetail->rate = '10.5';
        $otherDetail->quantity = '12';
        $otherDetail->name = 'fff';
        $otherDetail->receipt = '2222';
        $otherDetail->date = '2019-01-27';
        $otherDetail->o_id = '3';
        $otherDetail->save();
    }
}
