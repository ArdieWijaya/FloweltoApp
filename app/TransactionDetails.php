<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    protected $fillable = [
        'qty', 'flower_id', 'transaction_id'
    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function Flower(){
        return $this->belongsTo(Flower::class, 'flower_id');
    }
}
