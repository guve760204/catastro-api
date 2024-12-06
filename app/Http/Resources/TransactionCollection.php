<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TransactionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'transactions_count'=>$this->collection->count(),
            'accepted_transactions_count'=>$this->collection->where('accepted_at', !null)->count(),
            'rejected_transactions_count'=>$this->collection->where('rejected_at', !null)->count(),
            'ended_transactions_count'=>$this->collection->where('end_date', !null)->count(),
        ];
    }
}
