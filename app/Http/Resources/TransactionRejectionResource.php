<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionRejectionResource extends JsonResource
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
            'transaction'=>TransactionResource::make($this->whenLoaded('transaction')),
            'user'=>UserResource::make($this->whenLoaded('user')),
            'rejection_type'=>new TransactionRejectionTypeResource($this->transaction_rejection_type),
            'description'=>$this->description

        ];
    }
}
