<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RealEstateResource extends JsonResource
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

    'id'=>$this->id,
    'name'=>$this->name,
    'description'=>$this->description,
    'owner'=>$this->owner,
    'owner_image'=>asset($this->owner_image),
    'price'=>$this->price,
    'rooms'=>$this->rooms,
    'video'=>$this->video,
    'insurance'=>$this->insurance,
    'discount'=>$this->discount,
    'beds'=>$this->beds,
    'toilet'=>$this->toilet,
    'numperofperson'=>$this->numperofperson,
    'rules'=>$this->rules,
    'position_url'=>$this->position_url,
    'start_date'=>$this->start_date,
    'end_date'=>$this->end_date,
    'type'=>new TypeResource($this->whenLoaded('type')),
    'category'=>new CategoryResource($this->whenLoaded('category')),
    'fetures'=>FetureResource::collection($this->whenLoaded('fetures')),
    'images'=>RealEstateImagesResource::collection($this->whenLoaded('images')),





];

    }
}
