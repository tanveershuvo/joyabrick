<?php

use Illuminate\Database\Seeder;
use App\EmployeePayment;

class EmployeePaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-07";
		$employeePayment->salary = "5000.00";
		$employeePayment->bonus = "165.6";
		$employeePayment->payment_status = "0";
		$employeePayment->save();

		$employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-08";
		$employeePayment->salary = "8000.00";
		$employeePayment->bonus = "650";
		$employeePayment->payment_status = "0";
		$employeePayment->save();

		$employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-07";
		$employeePayment->salary = "4000.00";
		$employeePayment->bonus = "16.50";
		$employeePayment->payment_status = "0";
		$employeePayment->save();

		$employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-07";
		$employeePayment->salary = "4000.00";
		$employeePayment->bonus = "16.50";
		$employeePayment->payment_status = "0";
		$employeePayment->save();

		$employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-07";
		$employeePayment->salary = "4000.00";
		$employeePayment->bonus = "16.50";
		$employeePayment->payment_status = "0";
		$employeePayment->save();

		$employeePayment = new EmployeePayment;
		$employeePayment->date = "2020-01-07";
		$employeePayment->salary = "5000.00";
		$employeePayment->bonus = "1000";
		$employeePayment->payment_status = "0";
		$employeePayment->save();
    }
}
