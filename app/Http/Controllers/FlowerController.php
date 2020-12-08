<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FlowerCategory;
use App\Flower;
use App\Transaction;
use App\TransactionDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlowerController extends Controller
{

    public function homepage(){
        $flowers = Flower::all();
        $flower_categories = FlowerCategory::all();
        return view('homepage', ['flowers' => $flowers, 'flower_categories' => $flower_categories]);
    }

    public function view($id){
        $flowers = Flower::where('flower_category_id', '=', $id)->get();
        $flower_categories = FlowerCategory::find($id);
        return view('view', ['flowers' => $flowers, 'flower_categories' => $flower_categories]);
    }

    public function update($id){
        $flower = Flower::find($id);
        $flower_categories = FlowerCategory::all();
        return view('update', ['flower' => $flower, 'flower_categories' => $flower_categories]);
    }

//    updateflower kurang update image
    public function updateflower(Request $request)
    {
        $flower = Flower::where('id', $request->id)->update([
            'flowerName' => $request->flowerName,
            'flowerPrice' => $request->flowerPrice,
            'description' => $request->description,
            'flower_category_id' => $request->flower_category_id
        ]);
        return back()->with('success', 'You have successfully updated!');
    }

    public function details($id){
        $flower = Flower::find($id);
        return view('detail', ['flower' => $flower]);
    }

    public function addtocart(Request $request, $id){
        $cart = new Cart([
           "flowerQuantity" => $request->qty,
            "flowerId" => $id,
            "userId" => Auth::id()
        ]);
        $cart->save();
        $flower = Flower::all()->find($id);
        return back()->with('success', 'You have successfully add '.$flower->flowerName);
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
        $id = Auth::user()->id;
        $carts = Cart::where('userId', '=', $id)->get();
        $flowers = Flower::all();
        return view('cart', ['carts' => $carts, 'flowers' => $flowers]);
    }

    public function history(){
        return view('history');
    }

    public function historydetail($id){
        return view('historydetail');
    }
}
