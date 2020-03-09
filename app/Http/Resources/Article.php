<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //Get All data from table
//        return parent::toArray($request);

        return[
            'id'             =>$this->id,
            'title'          =>$this->title,
            'body'           =>$this->body,
            'created_at'     =>$this->created_at->diffForhumans(),
            'updated_at'     =>$this->updated_at->diffForhumans()


        ];
    }

    public function with($request){

        return[
            'version'       =>'1.0.0',
            'author_url'    =>url('')

        ];
    }

}
