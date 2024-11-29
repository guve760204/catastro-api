<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'notary_id'=>$this->notary_id,
            'agent_id'=>$this->agent_id,
            'name'=>$this->name,
            'cargo'=>$this->cargo,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'address'=>$this->address,
            'is_active'=>$this->is_active? true : false,
            'role_id'=>$this->role_id,
            'agent'=>AgentResource::make($this->whenLoaded('agent')),
            'notary'=>NotaryResource::make($this->whenLoaded('notary')),
        ];
    }
}
