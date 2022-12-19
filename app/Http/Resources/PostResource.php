<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public $status;
    public $message;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * tes changing
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $message;
        $this->status = $status;
       
    }


     
    public function toArray($request)
    {
        return [
            'succes' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
    
        ];
    }

    
}


