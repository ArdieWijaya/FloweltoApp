@extends('layouts.app')
@section('judul', 'My Cart')

@section('content')
<h1 style="text-align: center">Cart</h1>
    @if($carts->isEmpty())
    <h1>Kosong</h1>
    @else
        @foreach($carts as $cart)
            <form>
            <div class="container">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ $cart->Flower->flowerImage }}" class="card-img" alt="{{ $cart->Flower->flowerImage }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $cart->Flower->flowerName }}</h3>
                                <h5 class="card-title">Qty: {{ $cart->flowerQuantity }}</h5>
                                <p class="card-text">Price: Rp {{ $cart->flowerQuantity * $cart->Flower->flowerPrice }}</p>
                                <input type="submit" class="btn btn-primary mb-2"value="Update"/>
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        @endforeach
        <div class="d-flex justify-content-center">
        <form>
            <input type="submit" class="btn btn-danger mb-2"value="Checkout"/>
        </form>
        </div>
    @endif
@endsection
