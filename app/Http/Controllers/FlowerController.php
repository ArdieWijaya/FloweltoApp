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
        $flowers = Flower::where('flower_category_id', '=', $id)->paginate(8);
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

        if($request->flowerImage != null){
            $flower = Flower::where('id', $request->id)->update([
                'flowerName' => $request->flowerName,
                'flowerPrice' => $request->flowerPrice,
                'description' => $request->description,
                'flower_category_id' => $request->flower_category_id,
                'flowerImage' => $request->flowerImage
            ]);
        }
        else{
        $flower = Flower::where('id', $request->id)->update([
            'flowerName' => $request->flowerName,
            'flowerPrice' => $request->flowerPrice,
            'description' => $request->description,
            'flower_category_id' => $request->flower_category_id
        ]);
        }
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

        $check = Cart::where('userId', '=', Auth::id())->where('flowerId', '=', $id)->first();

        if($check != NULL){
            Cart::where('userId', '=', Auth::id())->where('flowerId', '=', $id)->update([
               'flowerQuantity' => $request->qty + $check->flowerQuantity
            ]);
        }
        else {
            $cart = new Cart([
                "flowerQuantity" => $request->qty,
                "flowerId" => $id,
                "userId" => Auth::id()
            ]);
            $cart->save();
        }
        $flower = Flower::all()->find($id);
        return back()->with('success', 'You have successfully add '.$flower->flowerName);
    }

    public function add(){
        return view('add');
    }

    public function addflower(Request $request){
        $this->validate($request, [
            'flower_category_id' => ['required'],
            'flowerName' => ['required', 'unique:flowers', 'string', 'min:5'],
            'flowerPrice' => ['required', 'integer', 'min:50000'],
            'description' => ['required', 'string', 'min:20']
        ]);

        if($request->flowerImage != null){
            $flower = new Flower([
                'flowerName' => $request->flowerName,
                'flowerPrice' => $request->flowerPrice,
                'description' => $request->description,
                'flower_category_id' => $request->flower_category_id,
                'flowerImage' => $request->flowerImage
            ]);
            $flower->save();
        }
        else{
            $flower = new Flower([
                'flowerName' => $request->flowerName,
                'flowerPrice' => $request->flowerPrice,
                'description' => $request->description,
                'flower_category_id' => $request->flower_category_id
            ]);
            $flower->save();
        }
        $flower_categories = FlowerCategory::all();
        return view('homepage', ['flower_categories' => $flower_categories]);
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
        $this->validate($request, [
            'flowerCategoriesName' => ['required', 'unique:flower_categories', 'string', 'min:5']
        ]);

        if($request->flowerCategoriesImage == null){
            $flower_category = FlowerCategory::where('id', $id)->update([
                'flowerCategoriesName' => $request->flowerCategoriesName
            ]);
        }

        else{
            $flower_category = FlowerCategory::where('id', $id)->update([
                'flowerCategoriesName' => $request->flowerCategoriesName,
                'flowerCategoriesImage' => $request->flowerCategoriesImage
            ]);
        }

        return back()->with('success', 'You have successfully updated!');
    }

    public function cart(){
        $id = Auth::user()->id;
        $carts = Cart::where('userId', '=', $id)->get();
        $flowers = Flower::all();
        return view('cart', ['carts' => $carts, 'flowers' => $flowers]);
    }

    public function updatecart(Request $request){
        $this->validate($request, [
            'qty' => ['required', 'integer', 'min:0']
        ]);

        if($request->qty == 0){
            DB::delete('DELETE FROM carts WHERE id = ?', [$request->id]);
        }

        else{
        $cart = Cart::where('id', $request->id)->update([
            'flowerQuantity' => $request->qty
        ]);
        }

        return back();
    }

    public function checkout(Request $request){
        $carts = Cart::where('userId', '=', Auth::id())->get();

        $transactions = new Transaction([
            "user_id" => Auth::id()
        ]);
        $transactions->save();

        foreach($carts as $cart){
            $transactiondetail = new TransactionDetails([
                'qty' => $cart->flowerQuantity,
                'flower_id' => $cart->flowerId,
                'transaction_id' => $transactions->id
            ]);
            $transactiondetail->save();
        }

        DB::delete('DELETE FROM carts WHERE userId = ?', [Auth::id()]);
        $flower_categories = FlowerCategory::all();
        return view('homepage', ['flower_categories' => $flower_categories]);
    }

    public function history(){
        $id = Auth::user()->id;
        $transactions = Transaction::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get();
        return view('history', ['transactions' => $transactions]);
    }

    public function historydetail($id){
        $details = TransactionDetails::where('transaction_id', '=', $id)->get();
        $totalprice = DB::table('transaction_details')->join('flowers', 'flower_id', '=', 'flowers.id')
            ->where('transaction_id', '=', $id)->sum(DB::raw('qty * flowers.flowerPrice'));
        return view('historydetail', ['details' => $details, 'totalprice' => $totalprice]);
    }
}
