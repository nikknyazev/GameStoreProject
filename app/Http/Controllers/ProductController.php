<?php

namespace App\Http\Controllers;

use App\Helpers\LaravelHelper;
use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Builder;

class ProductController extends Controller
{
    public function getAllProducts(Product $products)
    {
        return $products->orderBy('id', 'desc')->get();
    }

    public function novelFilter(Product $products) // Фильтр по новинкам - показывает только новинки
    {
        return $products->where('novelty', '=', 1)->get();
    }

    public function categoryFilter(int $category) // не пишем возвращаемые значения
    {
       $query = Product::query()->whereHas('categories', function (\Illuminate\Database\Eloquent\Builder $builder) use ($category) {
           $builder->where('category_id', '=', $category);
       });
//        dd(LaravelHelper::getEloquentSqlWithBindings($query));
        return $query->get();
    }

    public function publisherFilter(string $publisher_name)
    {
        $query = Product::whereHas('publisher', function (\Illuminate\Database\Eloquent\Builder $builder) use ($publisher_name) {
            $builder->where('name', $publisher_name);
        });
        return $query->get();
    }
}
