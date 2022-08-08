<?php

namespace Database\Seeders;

use App\Models\Price;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            PublisherSeeder::class,
            PriceSeeder::class
        ]);
    }
}
