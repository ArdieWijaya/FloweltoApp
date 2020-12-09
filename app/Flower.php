<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    public function flower_categories(){
        return $this->belongsTo(FlowerCategory::class, 'flower_category_id');
    }

    public function Cart(){
        return $this->hasOne(Cart::class);
    }
}
