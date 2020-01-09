<?php

use Illuminate\Database\Seeder;
use App\JalaniDetail;

class JalaniDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Koyla';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45df';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

		$jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Vushi';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45df1';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

		$jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Lakri';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45df2';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

		$jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Koyla';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45d3';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

		$jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Koyla';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45df7';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

		$jalaniDetail = new JalaniDetail;
		$jalaniDetail->rate ='12';
		$jalaniDetail->type ='Lakri';
		$jalaniDetail->quantity ='100';
		$jalaniDetail->rental ='1200';
		$jalaniDetail->receipt ='45df9';
		$jalaniDetail->date ='2020-01-07';
		$jalaniDetail->save();

    }
}
