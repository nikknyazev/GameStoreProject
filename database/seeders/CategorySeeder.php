<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('categories')->insert(['name'=>'name1', 'description'=>'desc1']);

        $category_fantasy  = Category::create([
            'name' => 'Жанр_фантастика',
            'slug' => '://example.com/category/fantasy',
            'image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);

        $category_shooter  = Category::create([
            'name' => 'Жанр_шутер',
            'slug' => '://example.com/category/shooter',
            'image' => 'https://avatars.dicebear.com/v2/initials/',
       ]);

       $category_singleplayer  = Category::create([
           'name' => 'Тип_однопользовательская',
           'slug' => '://example.com/category/singleplayer',
           'image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);

        $category_multiplayer  = Category::create([
            'name' => 'Тип_многопользовательская',
            'slug' => '://example.com/category/multiplayer',
            'image' => 'https://avatars.dicebear.com/v2/initials/',
        ]);
    }
}
