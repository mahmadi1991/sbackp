<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FabricTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        DB::table('fabric')->insert([
            'id'              => 1,
            'hash'            => Str::random(6),
            'parentId'        => '0',
            'parentOrder'     => '1',
            'title'           => 'ابریشم',
            'cost'            => null,
            'discountPercent' => null,
            'discountStatus'  => null,
            'stockStatus'     => null,
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 2,
            'hash'            => Str::random(6),
            'parentId'        => '0',
            'parentOrder'     => '2',
            'title'           => 'مخمل',
            'cost'            => null,
            'discountPercent' => null,
            'discountStatus'  => null,
            'stockStatus'     => null,
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 3,
            'hash'            => Str::random(6),
            'parentId'        => '0',
            'parentOrder'     => '3',
            'title'           => 'چرم',
            'cost'            => null,
            'discountPercent' => null,
            'discountStatus'  => null,
            'stockStatus'     => null,
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 4,
            'hash'            => Str::random(6),
            'parentId'        => '1',
            'parentOrder'     => null,
            'title'           => 'ابریشم آبی وارداتی از چین',
            'cost'            => 99000,
            'discountPercent' => 10,
            'discountStatus'  => 'Y',
            'stockStatus'     => 'Y',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 5,
            'hash'            => Str::random(6),
            'parentId'        => '1',
            'parentOrder'     => null,
            'title'           => 'ابریشم آبی وارداتی از افغانستان',
            'cost'            => 70000,
            'discountPercent' => 0,
            'discountStatus'  => 'N',
            'stockStatus'     => 'Y',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 6,
            'hash'            => Str::random(6),
            'parentId'        => '2',
            'parentOrder'     => null,
            'title'           => 'مخملی آبی',
            'cost'            => 80000,
            'discountPercent' => 15,
            'discountStatus'  => 'Y',
            'stockStatus'     => 'Y',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 7,
            'hash'            => Str::random(6),
            'parentId'        => '2',
            'parentOrder'     => null,
            'title'           => 'مخملی قرمز',
            'cost'            => 100000,
            'discountPercent' => 0,
            'discountStatus'  => 'N',
            'stockStatus'     => 'Y',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('fabric')->insert([
            'id'              => 8,
            'hash'            => Str::random(6),
            'parentId'        => '2',
            'parentOrder'     => null,
            'title'           => 'مخملی مشکی',
            'cost'            => 100000,
            'discountPercent' => 0,
            'discountStatus'  => 'N',
            'stockStatus'     => 'N',
            'creatorId'       => $faker->numberBetween(1, 2),
            'created_at'      => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


    }
}
