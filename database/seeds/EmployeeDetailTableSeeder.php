<?php

use Illuminate\Database\Seeder;
use App\EmployeeDetail;

class EmployeeDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. X';
		$emloyeeDetail->email='x@gmail.com';
		$emloyeeDetail->address='Dhaka';
		$emloyeeDetail->phone='01842642999';
		$emloyeeDetail->designation='Staff';
		$emloyeeDetail->salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. Y';
		$emloyeeDetail->email='y@gmail.com';
		$emloyeeDetail->address='Khulna';
		$emloyeeDetail->phone='01842642515';
		$emloyeeDetail->designation='Manager';
		$emloyeeDetail->salary='45000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. Z';
		$emloyeeDetail->email='z@gmail.com';
		$emloyeeDetail->address='Dhaka';
		$emloyeeDetail->phone='01642642888';
		$emloyeeDetail->designation='Staff';
		$emloyeeDetail->salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. A';
		$emloyeeDetail->email='a@gmail.com';
		$emloyeeDetail->address='Farmgate';
		$emloyeeDetail->phone='0184264255';
		$emloyeeDetail->designation='Staff';
		$emloyeeDetail->salary='30000.00';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. B';
		$emloyeeDetail->email='b@gmail.com';
		$emloyeeDetail->address='Nilkhet';
		$emloyeeDetail->phone='01842642544';
		$emloyeeDetail->designation='Staff';
		$emloyeeDetail->salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. C';
		$emloyeeDetail->email='c@gmail.com';
		$emloyeeDetail->address='Panthapath';
		$emloyeeDetail->phone='018426425111';
		$emloyeeDetail->designation='Manager';
		$emloyeeDetail->salary='40000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->name='Mr. S';
		$emloyeeDetail->email='s@gmail.com';
		$emloyeeDetail->address='Dhaka';
		$emloyeeDetail->phone='019426425000';
		$emloyeeDetail->designation='Staff';
		$emloyeeDetail->salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();


    }
}
