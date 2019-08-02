<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FactorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        DB::table('factor')->insert([
            'id'              => 1,
            'hash'            => Str::random(6),
            'userId'        => '4',
            'kind'           => 'FABRIC',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('factor')->insert([
            'id'              => 2,
            'hash'            => Str::random(6),
            'userId'        => '3',
            'kind'           => 'SEWING',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


    }
}
