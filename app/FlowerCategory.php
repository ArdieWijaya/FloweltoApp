<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerCategory extends Model
{
    public function flower(){
        return $this->hasMany(Flower::class);
    }
}
