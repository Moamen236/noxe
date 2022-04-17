<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PriceSeeder::class,
            TransportationSeeder::class,
            ReservationSeeder::class
        ]);
    }
}
