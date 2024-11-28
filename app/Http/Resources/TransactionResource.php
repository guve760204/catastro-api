<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class TransactionResource extends JsonResource
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
            'uuid'=>$this->uuid,
            'description'=>$this->description,
            'excerpt'=>Str::words($this->description,12),
            'location'=>$this->location,
            'name'=>$this->name,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'lat'=>$this->lat,
            'lng'=>$this->lng,
            'register_date'=>$this->register_date? Carbon::parse($this->register_date)->format('Y-m-d'): null,
            'end_date'=>$this->end_date? Carbon::parse($this->end_date)->format('Y-m-d'): null,
            'blueprint'=>$this->getFirstMedia('blueprint'),
            'accepted_at'=>$this->accepted_at,
            'processed_at'=>$this->processed_at,
            'rejected_at'=>$this->rejected_at,
            'canceled_at'=>$this->canceled_at,
            'status'=>TransactionStatusResource::make($this->whenLoaded('status')),
            'transaction_type'=>TransactionTypeResource::make($this->whenLoaded('transaction_type')),
            'notary'=>NotaryResource::make($this->whenLoaded('notary')),
            'agent'=>AgentResource::make($this->whenLoaded('agent')),
            'user'=>UserResource::make($this->whenLoaded('user')),
            'attendant'=>UserResource::make($this->whenLoaded('attendant')),
            'rejections'=>TransactionRejectionResource::collection($this->whenLoaded('rejections')),
        ];
    }
}
