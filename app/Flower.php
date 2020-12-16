<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = [
        'flowerName', 'flowerPrice', 'description', 'flowerImage', 'flower_category_id'
    ];

    public function flower_categories(){
        return $this->belongsTo(FlowerCategory::class, 'flower_category_id');
    }

    public function Cart(){
        return $this->hasOne(Cart::class);
    }

    public function TransactionDetail(){
        return $this->belongsTo(TransactionDetails::class);
    }
}
