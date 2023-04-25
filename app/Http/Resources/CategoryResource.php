<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class CategoryResource extends JsonResource
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
            'category_name_en' => $this->category_name_en,
            'category_name_ar' => $this->category_name_ar,
            'category_slug_en' => $this->category_slug_en,
            'category_slug_ar' => $this->category_slug_ar,
            'category_icon' => $this->category_icon,
            'products' => ProductResource::collection($this->products),
        ];
    }
}
