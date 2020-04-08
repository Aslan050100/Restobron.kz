<?php

namespace App\Http\Resources;

use App\Dish_type;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\DishType as DishTypeResource;
use App\Http\Resources\MenuProduct as MenuProductResource;
class Menu extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->description,
            'dish_type'=>new DishTypeResource($this->dish_types),
        ];
    }
}
