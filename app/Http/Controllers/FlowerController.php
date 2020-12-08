<?php

namespace App\Http\Controllers;

use App\FlowerCategory;
use App\Flower;
use App\Transaction;
use App\TransactionDetails;
use Illuminate\Http\Request;

class FlowerController extends Controller
{

    public function homepage(){
        $flowers = Flower::all();
        $flower_categories = FlowerCategory::all();
        return view('homepage', ['flowers' => $flowers, 'flower_categories' => $flower_categories]);
    }

    public function view($id){
        $flowers = Flower::all();
        $flower_categories = FlowerCategory::find($id);
        return view('view', ['flowers' => $flowers, 'flower_categories' => $flower_categories]);
    }

    public function update($id){
        $flower = Flower::find($id);
        return view('update', ['flower' => $flower]);
    }

    public function details($id){
        $flower = Flower::find($id);
        return view('detail', ['flower' => $flower]);
    }

    public function add(){
        return view('add');
    }

    public function managecategory(){
        $flower_categories = FlowerCategory::all();
        return view('managecategory', ['flower_categories' => $flower_categories]);
    }

    public function updatecategory($id){
        $flower_categories = FlowerCategory::find($id);
        return view('updatecategory', ['flower_categories' => $flower_categories]);
    }

    public function cart(){
        return view('cart');
    }

    public function history(){
        return view('history');
    }

    public function historydetail($id){
        return view('historydetail');
    }
}
