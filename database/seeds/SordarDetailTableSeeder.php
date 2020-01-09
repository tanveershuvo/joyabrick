<?php

use Illuminate\Database\Seeder;
use App\SordarDetail;

class SordarDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sordarDetail = new SordarDetail;
		$sordarDetail->sor_name = 'Riaz';
		$sordarDetail->sor_address = 'Dhaka';
		$sordarDetail->sor_type = 'Porai Sordar';
		$sordarDetail->sor_phone = '01683182337';
		$sordarDetail->com_id ='1';
		$sordarDetail->save();

		$sordarDetail = new SordarDetail;
		$sordarDetail->sor_name = 'Nissan';
		$sordarDetail->sor_address = 'Dhaka';
		$sordarDetail->sor_type = 'Saak Sordar';
		$sordarDetail->sor_phone = '01683182337';
		$sordarDetail->com_id ='1';
		$sordarDetail->save();

		$sordarDetail = new SordarDetail;
		$sordarDetail->sor_name = 'Riaz';
		$sordarDetail->sor_address = 'Dhaka';
		$sordarDetail->sor_type = 'Porai Sordar';
		$sordarDetail->sor_phone = '01683182337';
		$sordarDetail->com_id ='1';
		$sordarDetail->save();
    }
}
