<?php

namespace Bukin\ProductsPackage\Products\Presentation\Http\Resources\Api\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'item' => ShowResource::make($this->resource),
            'result' => 'Продукт успешно обновлен'
        ];
    }
}
