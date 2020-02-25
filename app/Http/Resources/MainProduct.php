<?php

namespace App\Http\Resources;

use App\Http\Resources\AverageCheck as AverageCheckResource;
use App\Http\Resources\Comfort as ComfortResource;
use App\Http\Resources\Kitchen as KitchenResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MainProduct extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' =>$this->address,
            'average_checks' => AverageCheckResource::collection($this->average_checks),
            'kitchens' => KitchenResource::collection($this->kitchens),
            'comforts' => ComfortResource::collection($this->comforts),
        ];
    }
}
