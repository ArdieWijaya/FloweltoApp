@extends('layouts.app')
@section('judul', 'Transaction History Details')

@section('content')
    <div class="container">
        <h1 class="text-center">Your Transaction at {{ $transaction->created_at }}</h1>
        <hr>
        <p class="mb-5"></p>
    </div>

    <div class="container">
        @foreach($details as $detail)
            <div class="card mb-3" style="width: 100%; height: 18em">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img src="{{ $detail->Flower->flowerImage }}" style="height: 18em;" alt="{{ $detail->Flower->flowerImage }}">
                    </div>

                    <div class="col-9">
                        <div class="card-body">
                            <h3 class="card-title">{{ $detail->Flower->flowerName }}</h3>
                            <hr>

                            <div class="row">
                                <div class="col-10"><h5>Quantity:</h5></div>
                                <div class="col-2 text-right"><h5>{{ $detail->qty }}</h5></div>
                            </div>
                            <div class="row">
                                <div class="col-10"><h5>Price per piece:</h5></div>
                                <div class="col-2 text-right"><h5>Rp {{ $detail->Flower->flowerPrice }}</h5></div>
                            </div>
                            <div class="row">
                                <div class="col-10"><h5>Total Price:</h5></div>
                                <div class="col-2 text-right"><h5>Rp {{ $detail->qty * $detail->Flower->flowerPrice }}</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

    <div class="row mt-5 mb-5">
        <h3 class="col-10">Total Price:</h3>
        <h3 class="col-2 text-right">Rp {{$totalprice}}</h3>
    </div>

    </div>
@endsection
