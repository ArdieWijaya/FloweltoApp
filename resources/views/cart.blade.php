@extends('layouts.app')
@section('judul', 'My Cart')

@section('content')
<h1 style="text-align: center">Cart</h1>
    @if($carts->isEmpty())
    <h1 class="text-center">Cart masih kosong</h1>
    @else
        @foreach($carts as $cart)
            <div class="container">
                <div class="card mb-3" style="width: 100%; height: 18em">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <img src="{{ $cart->Flower->flowerImage }}" style="height: 18em;" alt="{{ $cart->Flower->flowerImage }}">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h3 class="card-title">{{ $cart->Flower->flowerName }}</h3>
                                <hr>

                                <div class="row">
                                    <div class="col-8"><h5>Quantity:</h5></div>
                                    <div class="col-4 justify-content-end">
                                        <form method="POST" action={{ route('updatecart', $cart->id) }} class="form-inline">
                                            @csrf
                                            <input type="number" class="form-control mb-2 mr-sm-2 col-6" id="inlineFormInputName2" min=0 value="{{ $cart->flowerQuantity }}" name="qty">
                                            <input type="hidden" value="{{ $cart->id }}" name="id">
                                            <input type="submit" class="btn btn-primary mb-2"value="Update"/>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8"><h5>Price per piece:</h5></div>
                                    <div class="col-4 text-right"><h5>Rp {{ $cart->Flower->flowerPrice }}</h5></div>
                                </div>
                                <div class="row">
                                    <div class="col-8"><h5>Total Price:</h5></div>
                                    <div class="col-4 text-right"><h5>Rp {{ $cart->flowerQuantity * $cart->Flower->flowerPrice }}</h5></div>
                                </div>
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
            <input type="submit" class="btn btn-danger mt-3 mb-5 pl-5 pr-5 pt-2 pb-2" style="font-size: x-large;" value="Checkout"/>
        </form>
        </div>
    @endif
@endsection
