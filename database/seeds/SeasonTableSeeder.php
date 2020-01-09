<?php

use Illuminate\Database\Seeder;
use App\Season;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$season = new Season;
		$season->com_id = '1';
		$season->sea_name = 'Winter';
		$season->sea_start_time = '2020-01-03';
		$season->sea_end_time = '2020-06-03';
		$season->sea_budget = '250000';
		$season->save();

		$season = new Season;
		$season->com_id = '2';
		$season->sea_name = 'Summer';
		$season->sea_start_time = '2020-05-03';
		$season->sea_end_time = '2020-10-03';
		$season->sea_budget = '550000';
		$season->save();

    }
}
