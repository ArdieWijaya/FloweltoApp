@extends('layouts.app')
@section('judul', 'My Cart')

@section('content')
<h1 style="text-align: center">Cart</h1>
    @if($carts->isEmpty())
    <h1 class="text-center">Cart masih kosong</h1>
    @else
        @foreach($carts as $cart)
            <div class="container">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ $cart->Flower->flowerImage }}" class="card-img" alt="{{ $cart->Flower->flowerImage }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $cart->Flower->flowerName }}</h3>
                                <div class="card-title">
                                    <form method="POST" action={{ route('updatecart', $cart->id) }} class="form-inline">
                                        @csrf
                                        <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" min=0 value="{{ $cart->flowerQuantity }}" name="qty">
                                        <input type="hidden" value="{{ $cart->id }}" name="id">
                                        <input type="submit" class="btn btn-primary mb-2"value="Update"/>
                                    </form>
                                </div>
                                <h5 class="card-title">Price per piece: Rp {{ $cart->Flower->flowerPrice }}</h5>
                                <h5 class="card-text">Total Price: Rp {{ $cart->flowerQuantity * $cart->Flower->flowerPrice }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        @endforeach
        <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('checkout') }}">
            @csrf
            <input type="submit" class="btn btn-danger mb-2"value="Checkout"/>
        </form>
        </div>
    @endif
@endsection
