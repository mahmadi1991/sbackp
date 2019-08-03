<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FabricTableSeeder::class,
            FactorTableSeeder::class,
            AddressTableSeeder::class,
            SizeTableSeeder::class,
            SizeCategoryTableSeeder::class,
            DishdashaModelTableSeeder::class,
            DetailsModelTableSeeder::class,
            UserTableSeeder::class,
            RoleTableSeeder::class,
            UserRoleTableSeeder::class,
            AreaTableSeeder::class,
            CityTableSeeder::class,
            OrderTableSeeder::class,
            LanguageTableSeeder::class,
            OrderDetailsTableSeeder::class,
        ]);

    }
}
