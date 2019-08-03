<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GateTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();
		DB::table('gate')->insert([
			'label'      => 'مشاهده دپارتمان',
			'name'       => 'view_department',
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('gate')->insert([
			'label'      => 'ویرایش دپارتمان',
			'name'       => 'edit_department',
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('gate')->insert([
			'label'      => 'درج دپارتمان',
			'name'       => 'insert_department',
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
	}
}
