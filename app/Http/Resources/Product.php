<?php

namespace App\Http\Resources;

use App\Feedback;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\AverageCheck as AverageCheckResource;

use App\Http\Resources\Kitchen as KitchenResource;
use App\Http\Resources\Comfort as ComfortResource;
use App\Http\Resources\Hour as HourResource;
use App\Http\Resources\ProductImage as ProductImageResource;
use App\Http\Resources\Feedback as FeedbackResource;
class Product extends JsonResource
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
            'description' => $this->description,
            'phone_number' =>$this->phone_number,
            'address' =>$this->address,
            'data_open' =>$this->data_open,
            'seats' =>$this->seats,
            'video' =>$this->video,
            'rating' =>$this->rating,
            'map' =>$this->map,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'average_checks' => AverageCheckResource::collection($this->average_checks),
            'kitchens' => KitchenResource::collection($this->kitchens),
            'comforts' => ComfortResource::collection($this->comforts),
            'hours' => HourResource::collection($this->hours),
            'product_images' => ProductImageResource::collection($this->product_images),
            'feedbacks'=>FeedbackResource::collection($this->feedbacks),
        ];
    }
}
