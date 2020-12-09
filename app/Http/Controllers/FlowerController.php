<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FlowerCategory;
use App\Flower;
use App\Transaction;
use App\TransactionDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function deleteflower(Request $request){
        DB::delete('DELETE FROM flowers WHERE id = ?', [$request->id]);

        return redirect('/');
    }

//    updateflower kurang update image
    public function updateflower(Request $request)
    {
        $this->validate($request, [
            'flowerName' => ['required', 'unique:flowers', 'string', 'min:5'],
            'flowerPrice' => ['required', 'numeric', 'min:50000'],
            'description' => ['required', 'string', 'min:20'],
            'flower_category_id' => ['required']
        ]);

        $flower = Flower::where('id', $request->id)->update([
            'flowerName' => $request->flowerName,
            'flowerPrice' => $request->flowerPrice,
            'description' => $request->description,
            'flower_category_id' => $request->flower_category_id
        ]);
        return back()->with('success', 'You have successfully updated!');
    }

    public function search(Request $request){
        $flower_categories = FlowerCategory::find($request->flower_categories_id);
        $search = $request->search;
        $flower_categories_id = $request->flower_categories_id;

        if($request->category == 1) {
            $flowers = DB::table('flowers')->where('flowerName', 'like', "%" . $search . "%")
                ->where('flower_category_id', 'like', "%" . $flower_categories_id . "%")->paginate(8);
        }
        else{
            $flowers = DB::table('flowers')->where('flowerPrice', 'like', $search)
                ->where('flower_category_id', 'like', "%" . $flower_categories_id . "%")->paginate(8);
        }

        return view('view', ['flowers' => $flowers, 'flower_categories' => $flower_categories]);
    }

    public function details($id){
        $flower = Flower::find($id);
        return view('detail', ['flower' => $flower]);
    }

    public function addtocart(Request $request, $id){
        $this->validate($request, [
           'qty' => ['required', 'integer', 'min:1']
        ]);

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

    public function deletecategory(Request $request){
        DB::delete('DELETE FROM flower_categories WHERE id = ?', [$request->id]);

        return redirect('/');
    }
//image belom ada

    public function updatecategory($id)
    {
        $flower_categories = FlowerCategory::find($id);

        return view('updatecategory', ['flower_categories' => $flower_categories]);
    }

    public function updatecategorydata(Request $request, $id){
//        dd($request);
        $this->validate($request, [
            'flowerCategoriesName' => ['required', 'unique:flower_categories', 'string', 'min:5']
        ]);
        $flower_category = FlowerCategory::where('id', $id)->update([
            'flowerCategoriesName' => $request->flowerCategoriesName
        ]);
        return back()->with('success', 'You have successfully updated!');
    }

    public function cart(){
        $id = Auth::user()->id;
        $carts = Cart::where('userId', '=', $id)->get();
        $flowers = Flower::all();
        return view('cart', ['carts' => $carts, 'flowers' => $flowers]);
    }

    public function updatecart(Request $request){
        $cart = Cart::where('id', $request->id)->update([
            'flowerQuantity' => $request->qty
        ]);
        return back();
    }

    public function history(){
        return view('history');
    }

    public function historydetail($id){
        return view('historydetail');
    }
}
