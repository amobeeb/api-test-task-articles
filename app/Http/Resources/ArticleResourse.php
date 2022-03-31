<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResourse extends JsonResource
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
            'title'=>$this->title,
            'description'=>$this->description,
            'views'=>$this->views,
            'likes'=>$this->likes,
            'thumbnail_image'=>$this->thumbnail_image,
            'main_image'=>$this->main_image,
            'posted_date'=>$this->posted_date,
        ];
    }
}
