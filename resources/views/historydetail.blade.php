@extends('layouts.app')
@section('judul', 'Transaction History Details')

@section('content')
    <h1 class="text-center">Your Transaction at {{ $transaction->created_at }}</h1>
    @foreach($details as $detail)
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ $detail->Flower->flowerImage }}" class="card-img" alt="{{ $detail->Flower->flowerImage }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $detail->Flower->flowerName }}</h3>
                            <h3 class="card-title">{{ $detail->qty }}</h3>
                            <h5 class="card-title">Price per piece: Rp {{ $detail->Flower->flowerPrice }}</h5>
                            <h5 class="card-text">Total Price: Rp {{ $detail->qty * $detail->Flower->flowerPrice }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    @endforeach
    <h3>Total Price: {{$totalprice}}</h3>
@endsection
