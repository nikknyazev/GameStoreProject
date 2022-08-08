<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_1 = Product::create([
            'name' => 'Overwatch',
            'description' => 'Мультиплеерный шутер от первого лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);

//        $product_1->publisher()->save(Publisher::where('name','=','Blizzard')->first()); //не работает строка
        $product_1->categories()->saveMany([Category::where('name', '=','Жанр_шутер')->first(),
                                            Category::where('name', 'Тип_многопользовательская')->first(),
                                            Category::where('name', 'Жанр_фантастика')->first()]);


        $product_2 = Product::create([
            'name' => 'Call of Duty',
            'description' => 'Мультиплеерный шутер от первого лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);


        $product_2->categories()->saveMany([Category::where('name', '=','Жанр_шутер')->first(),
                                            Category::where('name', 'Тип_многопользовательская')->first()]);


        $product_3 = Product::create([
            'name' => 'Life is strange',
            'description' => 'Однопользовательская игра от третьего лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
            'novelty' => 1,
            'status' => 0
        ]);

        $product_3->categories()->saveMany([Category::where('name', '=','Жанр_фантастика')->first(),
            Category::where('name', 'Тип_однопользовательская')->first()]);


        $product_4 = Product::create([
            'name' => 'Diablo',
            'description' => 'Многопользовательская игра с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
            'novelty' => 1,
            'position' => 999
        ]);

        $product_4->categories()->saveMany([Category::where('name', '=','Жанр_фантастика')->first(),
            Category::where('name', 'Тип_многопользовательская')->first()]);
    }

}
