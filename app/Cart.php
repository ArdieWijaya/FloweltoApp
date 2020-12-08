<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'flowerQuantity', 'userId', 'flowerId'
    ];

    public function Flower(){
        return $this->hasOne(Flower::class, 'id');
    }

    public function User(){
        return $this->belongsTo(User::class, 'userId');
    }
}
