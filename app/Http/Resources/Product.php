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
use App\Http\Resources\Parking as ParkingResource;
use App\Http\Resources\Pay as PayResource;
use App\Http\Resources\Hashtag as HashtagResource;
use App\Http\Resources\HallDescription as HallDescriptionResource;
use App\Http\Resources\Menu as MenuResource;
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
            'pro_menu'=>$this->pro_menu,
            'average_checks' => AverageCheckResource::collection($this->average_checks),
            'kitchens' => KitchenResource::collection($this->kitchens),
            'comforts' => ComfortResource::collection($this->comforts),
            'hours' => HourResource::collection($this->hours),
            'parkings'=>ParkingResource::collection($this->parkings),
            'pays'=>PayResource::collection($this->pays),
            'hashtags'=>HashtagResource::collection($this->hashtags),
            'product_images' => ProductImageResource::collection($this->product_images),
            'feedbacks'=>FeedbackResource::collection($this->feedbacks),
            'hall_description'=>new HallDescriptionResource($this->hall_description),
            'menus' =>MenuResource::collection($this->menus),
        ];
    }
}
