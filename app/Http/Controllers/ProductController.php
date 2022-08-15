<?php

namespace App\Http\Controllers;

use App\Helpers\LaravelHelper;
use App\Http\Requests\ProductSortRequest;
use App\Http\Resources\ProductResource;
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
        return ProductResource::collection($query->get());
//        return $query->get();
    }

    public function generalFilter($category, $publisher_name, $novelty)
    {
        $queryCategory = Product::whereHas('categories', function (\Illuminate\Database\Eloquent\Builder $builder) use ($category) {
            $builder->where('category_id', $category);
        })
            ->whereHas('publisher', function (\Illuminate\Database\Eloquent\Builder $builder) use ($publisher_name) {
                $builder->where('name', $publisher_name);
            })
            ->where('novelty', $novelty);


        return $queryCategory->get();
    }

    public function productSort(ProductSortRequest $request)
    {
        $query = Product::query();
        if ($request->input('withNovelty') != null) {
            if ($request->input('withNovelty') === true) {
                $query->where('novelty', 1);
            } else {
                $query->where('novelty', 0);
            }
        }
        if ($request->input('withStatus') != null) {
            if ($request->input('withStatus') === 0) {
                $query->where('status', '!=',0);
            }
        }
        if ($request->input('minPrice') != null) {
            $query->whereHas('price', function (\Illuminate\Database\Eloquent\Builder $builder) use ($request) {
                $builder->where('value', '>', $request->input('minPrice'))
                    ->where('price_type', $request->input('withPriceType'));
            });
        }
        return $query->get();
    }

    public function getProductPrice() {
        $query = Product::query()->with('price');
        return ProductResource::collection($query->get());
    }
}
