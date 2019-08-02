<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('area')->insert([
            'hash'             => Str::random(6),
            'title'            => 'منطقه مرکزی',
            'cityId'           => 14,
            //'postmanCost'      => '1000',
            'transmissionCost' => '1500',
            'status'           => 'ACTIVE',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('area')->insert([
            'hash'             => Str::random(6),
            'title'            => 'منطقه جنوبی',
            'cityId'           => 13,
            //'postmanCost'      => '2000',
            'transmissionCost' => '2500',
            'status'           => 'INACTIVE',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('area')->insert([
            'hash'             => Str::random(6),
            'title'            => 'منطقه غربی',
            'cityId'           => 11,
            //'postmanCost'      => '3000',
            'transmissionCost' => '3500',
            'status'           => 'INACTIVE',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

    }
}
