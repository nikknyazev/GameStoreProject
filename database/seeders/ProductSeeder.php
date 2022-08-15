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
        $productOverwatch = Product::create([
            'name' => 'Overwatch',
            'description' => 'Мультиплеерный шутер от первого лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);

//        $product_1->publisher()->save(Publisher::where('name','=','Blizzard')->first()); //не работает строка
        $productOverwatch->categories()->saveMany([Category::where('name', '=','Жанр_шутер')->first(),
                                            Category::where('name', 'Тип_многопользовательская')->first(),
                                            Category::where('name', 'Жанр_фантастика')->first()]);


        $productCallOfDuty = Product::create([
            'name' => 'Call of Duty',
            'description' => 'Мультиплеерный шутер от первого лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);


        $productCallOfDuty->categories()->saveMany([Category::where('name', '=','Жанр_шутер')->first(),
                                            Category::where('name', 'Тип_многопользовательская')->first()]);


        $productLifeIsStrange = Product::create([
            'name' => 'Life is strange',
            'description' => 'Однопользовательская игра от третьего лица с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
            'novelty' => 1,
            'status' => 0
        ]);

        $productLifeIsStrange->categories()->saveMany([Category::where('name', '=','Жанр_фантастика')->first(),
            Category::where('name', 'Тип_однопользовательская')->first()]);


        $productDiablo = Product::create([
            'name' => 'Diablo',
            'description' => 'Многопользовательская игра с элементами фантастики',
            'slug' => '://example.com/products'.'check_concatenation',
            'preview_image' => 'https://avatars.dicebear.com/v2/initials/',
            'novelty' => 1,
            'position' => 999
        ]);

        $productDiablo->categories()->saveMany([Category::where('name', '=','Жанр_фантастика')->first(),
            Category::where('name', 'Тип_многопользовательская')->first()]);
    }

}
