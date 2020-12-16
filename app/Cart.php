<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'flowerQuantity', 'userId', 'flowerId'
    ];

    public function Flower(){
        return $this->belongsTo(Flower::class, 'flowerId');
    }

    public function User(){
        return $this->belongsTo(User::class, 'userId');
    }
}
