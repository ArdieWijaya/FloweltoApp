@extends('layouts.app')
@section('judul', 'View Flower')

@section('content')
    <div class="container justify-content-center d-flex flex-wrap">
    @foreach($flowers as $flower)
        @if($flower_categories->id == $flower->flower_category_id)
        <div class="card m-2" style="width: 14rem;">
            <img class="card-img-top imgHeight" src="{{ $flower->flowerImage }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">{{ $flower->flowerName }}</h5>
                <h5 class="card-title" style="text-align: center">Rp {{ $flower->flowerPrice }}</h5>
            </div>
            <a href="/category/{{ $flower->id }}/details" class="btn btn-primary btn-lg btn-block">See Description</a>
        </div>
        @endif
    @endforeach
    </div>
@endsection
