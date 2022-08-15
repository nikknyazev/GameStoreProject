<?php

namespace App\Http\Requests;

use App\Models\Price;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductSortRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'minPrice'=>'nullable|int|min:1|max:10000',
            'withPriceType'=>['nullable', 'int', Rule::in([Price::DISCOUNT_PRICE, Price::SALE_PRICE, Price::STANDARD_PRICE]), 'required_if:minPrice,maxPrice'],
            'maxPrice'=>'nullable|int|min:1|max:10000',
            'withPrice'=>'nullable|int|min:1|max:10000',
            'withNovelty'=>'nullable|bool',
            'withPosition'=>'nullable|int|min:0|max:5000',
            'withStatus'=>'nullable|int|min:0|max:10'
        ];
    }
}
