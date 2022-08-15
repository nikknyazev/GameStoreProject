<?php

namespace App\Http\Resources;

use App\Models\Price;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Price
 */
class PriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'price'=>$this->value,
            'price_type'=>$this->price_type
        ];
    }
}
