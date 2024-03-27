<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_uz' => $this->name_uz,
            'name_en' => $this->name_en,
            'category_name' => $this->category->name_en ?? 'No category',
            'price' => $this->price,
            // 'key' => rand(100000, 999999),
        ];
    }
}
