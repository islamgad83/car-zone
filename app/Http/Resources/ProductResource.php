<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_name_en' => $this->product_name_en,
            'product_name_ar' => $this->product_name_ar,
            'product_slug_en' => $this->product_slug_en,
            'product_slug_ar' => $this->product_slug_ar,
            'product_code' => $this->product_code,
            'product_qty' => $this->product_qty,
            'product_tags_en' => $this->product_tags_en,
            'product_tags_ar' => $this->product_tags_ar,
            'product_size_en' => $this->product_size_en,
            'product_size_ar' => $this->product_size_ar,
            'product_color_en' => $this->product_color_en,
            'product_color_ar' => $this->product_color_ar,
            'selling_price' => $this->selling_price,
            'discount_price' => $this->discount_price,
            'short_descp_en' => $this->short_descp_en,
            'short_descp_ar' => $this->short_descp_ar,
            'long_descp_en' => $this->long_descp_en,
            'long_descp_ar' => $this->long_descp_ar,
            'product_thambnail' => $this->product_thambnail,
            'rate' => $this->rate,


        ];
    }
}
