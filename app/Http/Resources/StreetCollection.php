<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StreetCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'order' => $this->order,
            'territory_id' => $this->territory_id,
            'house_count' => $this->house_count,
        ];
    }
}
