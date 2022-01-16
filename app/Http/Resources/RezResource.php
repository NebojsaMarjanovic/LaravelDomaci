<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'rezervacija';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
'id'=>$this->resource->id,
'ime'=>$this->resource->ime,
'prezime'=>$this->resource->prezime,
'email'=>$this->resource->email,
'destinacija'=>$this->resource->destinacija,
'polazak'=>$this->resource->polazak,
'povatak'=>$this->resource->povatak,
'napomena'=>$this->resource->napomena,
'brPutnika'=>$this->resource->brPutnika,
'user'=>new UserResource($this->resource->user),
'grad'=>new GradResource($this->resource->grad),
//'user'=>$this->resource->user,
//'grad'=>$this->resource->grad,

        ];
    }
}
