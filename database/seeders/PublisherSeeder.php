<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $publisherBlizzard = Publisher::create([
            'name' => 'Blizzard',
            'image' => 'https://avatars.dicebear.com/v2/initials/'
        ]);

        $publisherBlizzard->products()->save(Product::where('name', '=', 'Overwatch')->first());

        $publisherUbisoft = Publisher::create([
            'name' => 'Ubisoft',
            'image' => 'https://avatars.dicebear.com/v2/initials/'
        ]);

        $publisherUbisoft->products()->save(Product::where('name', '=', 'Call of Duty')->first());


        $publisher_3 = Publisher::create([
            'name' => 'Valve',
            'image' => 'https://avatars.dicebear.com/v2/initials/'
        ]);

        $publisher_4 = Publisher::create([
            'name' => 'Square Enix',
            'image' => 'https://avatars.dicebear.com/v2/initials/'
        ]);
    }
}
