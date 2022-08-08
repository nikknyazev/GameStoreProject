<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    const PRODUCT_STATUS_OFF = 0; // Продукты нигде не отображается
    const PRODUCT_STATUS_ON = 10; // Продукт везде отображается

    protected $fillable = [
        'name',
        'description',
        'slug',
        'preview_image',
        'position',
        'video',
        'novelty',
        'status',
        'publisher_id'
        ];

     public function categories(): BelongsToMany
     {
        return $this->belongsToMany(Product::class, 'category_product_join', 'product_id', 'category_id')->withTimestamps();
     }

     public function price(): HasMany
     {
         return $this->hasMany(Product::class);
     }

     public function publisher(): BelongsTo
     {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
     }

}
