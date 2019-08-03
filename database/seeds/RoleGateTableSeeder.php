<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleGateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();

		DB::table('role_gate')->insert([
			'gateId'     => 1,
			'roleId'     => 1,
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('role_gate')->insert([
			'gateId'     => 2,
			'roleId'     => 1,
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('role_gate')->insert([
			'gateId'     => 3,
			'roleId'     => 1,
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('role_gate')->insert([
			'gateId'     => 1,
			'roleId'     => 2,
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
		DB::table('role_gate')->insert([
			'gateId'     => 3,
			'roleId'     => 2,
			'creatorId'  => $faker->numberBetween(1, 2),
			'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
				->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
		]);
    }
}
