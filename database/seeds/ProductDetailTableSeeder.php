<?php

use Illuminate\Database\Seeder;
use App\ProductDetail;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$productDetail = new ProductDetail;
		$productDetail->pro_name = 'Quality 1';
		$productDetail->unit_price = '11.50';
		$productDetail->available = '2970';
		$productDetail->com_id = '1';
		$productDetail->save();

		$productDetail = new ProductDetail;
		$productDetail->pro_name = 'Quality 2';
		$productDetail->unit_price = '7.50';
		$productDetail->available = '100';
		$productDetail->com_id = '2';
		$productDetail->save();

		$productDetail = new ProductDetail;
		$productDetail->pro_name = 'Quality 1';
		$productDetail->unit_price = '5.00';
		$productDetail->available = '2970';
		$productDetail->com_id = '3';
		$productDetail->save();

		$productDetail = new ProductDetail;
		$productDetail->pro_name = 'Quality 2';
		$productDetail->unit_price = '11.50';
		$productDetail->available = '2970';
		$productDetail->com_id = '4';
		$productDetail->save();
    }
}
