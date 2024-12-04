<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction_rejection extends Model
{
    protected $with = ['transaction_rejection_type'];

    protected $fillable = ['description', 'transaction_rejection_type_id', 'user_id', 'transaction_id'];
    //relations
    public function transaction_rejection_type()
    {
        return $this->belongsTo(Transaction_rejection_type::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
