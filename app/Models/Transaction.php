<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['transaction_type_id',  'description', 'location', 'name', 'phone', 'email', 'address', 'lat', 'lng'];
    protected $with = ['user', 'attendant', 'rejections', 'transaction_type', 'status'];

    //relations
    public function rejections ()
    {
        return $this->hasMany(Transaction_rejection::class);
    }

    public function user (){
        return $this->belongsTo(User::class);
    }
    public function attendant (){
        return $this->belongsTo(User::class, 'attendant_id', 'id');
    }

    public function notary(){
        return $this->belongsTo(Notary::class);
    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

    public function costumer(){
        return $this->belongsTo(Costumer::class);
    }

    public function transaction_type (){
        return $this->belongsTo(TransactionType::class);
    }
    public function status(){
        return $this->belongsTo(TransactionStatus::class, 'transaction_status_id', 'id');
    }
}
