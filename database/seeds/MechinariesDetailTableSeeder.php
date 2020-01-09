<?php

use Illuminate\Database\Seeder;
use App\MechinariesDetail;

class MechinariesDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mechinariesDetail = new MechinariesDetail;
		$mechinariesDetail->rate ='12000';
		$mechinariesDetail->type ='Mechine';
		$mechinariesDetail->quantity ='10';
		$mechinariesDetail->name ='Polythin';
		$mechinariesDetail->receipt ='45df';
		$mechinariesDetail->date ='2020-01-07';
		$mechinariesDetail->save();

		$mechinariesDetail = new MechinariesDetail;
		$mechinariesDetail->rate ='12000';
		$mechinariesDetail->type ='Parts';
		$mechinariesDetail->quantity ='20kg';
		$mechinariesDetail->name ='Polythin';
		$mechinariesDetail->receipt ='45dfit';
		$mechinariesDetail->date ='2020-01-09';
		$mechinariesDetail->save();

		$mechinariesDetail = new MechinariesDetail;
		$mechinariesDetail->rate ='12000';
		$mechinariesDetail->type ='Mechine';
		$mechinariesDetail->quantity ='10';
		$mechinariesDetail->name ='Polythin';
		$mechinariesDetail->receipt ='45df';
		$mechinariesDetail->date ='2020-01-07';
		$mechinariesDetail->save();

		$mechinariesDetail = new MechinariesDetail;
		$mechinariesDetail->rate ='12000';
		$mechinariesDetail->type ='Mechine';
		$mechinariesDetail->quantity ='10';
		$mechinariesDetail->name ='Ilastic';
		$mechinariesDetail->receipt ='45df';
		$mechinariesDetail->date ='2020-01-07';
		$mechinariesDetail->save();
    }
}
