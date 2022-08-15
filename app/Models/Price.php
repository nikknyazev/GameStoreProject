<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    public const STANDARD_PRICE = 0;
    public const SALE_PRICE = 1;
    public const DISCOUNT_PRICE = 2;

    protected $fillable = [
        'product_id',
        'value',
        'price_type '
    ];

    public function product() :BelongsTo
    {
            return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
