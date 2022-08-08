<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price_1 = Price::create([
            'product_id' => Product::where('name', '=', 'Overwatch')->first()->id,
            'value' => 1000,
            'price_type' => 'Standard price'
        ]);

        $price_2 = Price::create([
            'product_id' => Product::where('name', '=', 'Call of Duty')->first()->id,
            'value' => 1500,
            'price_type' => 'Price with discount'
        ]);

        $price_3 = Price::create([
            'product_id' => Product::where('name', '=', 'Call of Duty')->first()->id,
            'value' => 2000,
            'price_type' => 'Standard price'
        ]);

        $price_4 = Price::create([
            'product_id' => Product::where('name', '=', 'Life is strange')->first()->id,
            'value' => 1200,
            'price_type' => 'Sale Price'
        ]);

        $price_5 = Price::create([
            'product_id' => Product::where('name', '=', 'Life is strange')->first()->id,
            'value' => 2500,
            'price_type' => 'Standard price'
        ]);


        $price_6 = Price::create([
            'product_id' => Product::where('name', '=', 'Diablo')->first()->id,
            'value' => 3000,
            'price_type' => 'Standard price'
        ]);

        $price_7 = Price::create([
            'product_id' => Product::where('name', '=', 'Diablo')->first()->id,
            'value' => 1500,
            'price_type' => 'Price with discount'
        ]);
    }
}
