<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DiscountCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $startDate = \Carbon\Carbon::now()->addDays($faker->numberBetween(-10, -1));
        $endDate   = $startDate->addDays($faker->numberBetween(3, 8));

        DB::table('discount_code')->insert([
            'hash'              => Str::random(6),
            'userId'            => 3,
            'code'              => 5698314,
            'calculationMethod' => 'PERCENT',
            'type'              => 'PUBLIC',
            'startDate'         => $startDate,
            'endDate'           => $endDate,
            'amount'            => '10',
            'disposable'        => 'Y',
            'description'       => 'توضیحات شماره1',
            'status'            => 'ACTIVE',
            'creatorId'         => $faker->numberBetween(1, 2),
            'created_at'        => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('discount_code')->insert([
            'hash'              => Str::random(6),
            'userId'            => 3,
            'code'              => 5696314,
            'calculationMethod' => 'PERCENT',
            'type'              => 'PRIVATE',
            'startDate'         => $startDate,
            'endDate'           => $endDate,
            'amount'            => '15',
            'disposable'        => 'N',
            'description'       => 'توضیحات شماره2',
            'status'            => 'EXPIRE',
            'creatorId'         => $faker->numberBetween(1, 2),
            'created_at'        => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('discount_code')->insert([
            'hash'              => Str::random(6),
            'userId'            => 4,
            'code'              => 5698319,
            'calculationMethod' => 'AMOUNT',
            'type'              => 'PUBLIC',
            'startDate'         => $startDate,
            'endDate'           => $endDate,
            'amount'            => '5000',
            'disposable'        => 'N',
            'description'       => 'توضیحات شماره3',
            'status'            => 'EXPIRE',
            'creatorId'         => $faker->numberBetween(1, 2),
            'created_at'        => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('discount_code')->insert([
            'hash'              => Str::random(6),
            'userId'            => 4,
            'code'              => 5098314,
            'calculationMethod' => 'AMOUNT',
            'type'              => 'PRIVATE',
            'startDate'         => $startDate,
            'endDate'           => $endDate,
            'amount'            => '1000',
            'disposable'        => 'Y',
            'description'       => 'توضیحات شماره1',
            'status'            => 'ACTIVE',
            'creatorId'         => $faker->numberBetween(1, 2),
            'created_at'        => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
