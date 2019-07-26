<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('role')->insert([
            'hash'       => Str::random(6),
            'title'      => 'admin',
            'label'      => 'ادمین',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('role')->insert([
            'hash'       => Str::random(6),
            'title'      => 'secretary',
            'label'      => 'منشی',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('role')->insert([
            'hash'       => Str::random(6),
            'title'      => 'customer',
            'label'      => 'مشتری',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('role')->insert([
            'hash'       => Str::random(6),
            'title'      => 'tailor',
            'label'      => 'خیاط',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
