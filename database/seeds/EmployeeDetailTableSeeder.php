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
		$emloyeeDetail->emp_name='Mr. X';
		$emloyeeDetail->emp_email='x@gmail.com';
		$emloyeeDetail->emp_address='Dhaka';
		$emloyeeDetail->emp_phone='01842642999';
		$emloyeeDetail->emp_des='Staff';
		$emloyeeDetail->emp_salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. Y';
		$emloyeeDetail->emp_email='y@gmail.com';
		$emloyeeDetail->emp_address='Khulna';
		$emloyeeDetail->emp_phone='01842642515';
		$emloyeeDetail->emp_des='Manager';
		$emloyeeDetail->emp_salary='45000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. Z';
		$emloyeeDetail->emp_email='z@gmail.com';
		$emloyeeDetail->emp_address='Dhaka';
		$emloyeeDetail->emp_phone='01642642888';
		$emloyeeDetail->emp_des='Staff';
		$emloyeeDetail->emp_salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. A';
		$emloyeeDetail->emp_email='a@gmail.com';
		$emloyeeDetail->emp_address='Farmgate';
		$emloyeeDetail->emp_phone='0184264255';
		$emloyeeDetail->emp_des='Staff';
		$emloyeeDetail->emp_salary='30000.00';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. B';
		$emloyeeDetail->emp_email='b@gmail.com';
		$emloyeeDetail->emp_address='Nilkhet';
		$emloyeeDetail->emp_phone='01842642544';
		$emloyeeDetail->emp_des='Staff';
		$emloyeeDetail->emp_salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. C';
		$emloyeeDetail->emp_email='c@gmail.com';
		$emloyeeDetail->emp_address='Panthapath';
		$emloyeeDetail->emp_phone='018426425111';
		$emloyeeDetail->emp_des='Manager';
		$emloyeeDetail->emp_salary='40000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();

		$emloyeeDetail= new EmployeeDetail;
		$emloyeeDetail->emp_name='Mr. S';
		$emloyeeDetail->emp_email='s@gmail.com';
		$emloyeeDetail->emp_address='Dhaka';
		$emloyeeDetail->emp_phone='019426425000';
		$emloyeeDetail->emp_des='Staff';
		$emloyeeDetail->emp_salary='20000';
		$emloyeeDetail->status='0';
		$emloyeeDetail->save();


    }
}
