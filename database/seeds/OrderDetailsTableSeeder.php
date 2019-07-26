<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('order_details')->insert([
            'hash'       => Str::random(6),
            'detailsId'  => 4,
            'orderId'    => 1,
            'cost'       => 9000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('order_details')->insert([
            'hash'       => Str::random(6),
            'detailsId'  => 8,
            'orderId'    => 1,
            'cost'       => 30000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('order_details')->insert([
            'hash'       => Str::random(6),
            'detailsId'  => 9,
            'orderId'    => 2,
            'cost'       => 30000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('order_details')->insert([
            'hash'       => Str::random(6),
            'detailsId'  => 5,
            'orderId'    => 2,
            'cost'       => 9000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
