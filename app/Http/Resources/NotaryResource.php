<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id'=>$this->id,
          'name'=>$this->name,
          'number'=>$this->number,
          'location'=>$this->location,
          'email'=>$this->email,
          'phone'=>$this->phone,
          'address'=>$this->address,
          'is_local'=>$this->is_local,
          'is_active'=>$this->is_active
        ];
    }
}
