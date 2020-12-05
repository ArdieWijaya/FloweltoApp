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
        return view('update');
    }

    public function details($id){
        $flower = Flower::find($id);
        return view('detail', ['flower' => $flower]);
    }

    public function add(){
        return view('add');
    }

    public function managecategory(){
        return view('managecategory');
    }

    public function updatecategory($id){
        return view('updatecategory');
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
