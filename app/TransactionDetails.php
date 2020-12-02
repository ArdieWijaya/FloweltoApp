<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
