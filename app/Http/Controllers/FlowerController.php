<?php

namespace App\Http\Controllers;

use App\FlowerCategory;
use Illuminate\Http\Request;

class FlowerController extends Controller
{

    public function homepage(){
        $flower_categories = FlowerCategory::all();
        return view('welcome', ['flower_categories' => $flower_categories]);
    }
}
