@extends('layouts.app')
@section('judul', 'View Flower')

@section('content')
    <h1 style="text-align: center">Flower Category: {{ $flower_categories->flowerCategoriesName }}</h1>
    <div class="container justify-content-center d-flex flex-wrap">
    @foreach($flowers as $flower)
        @if($flower_categories->id == $flower->flower_category_id)
{{--        <div class="card m-2" style="width: 14rem;">--}}
{{--            <img class="card-img-top imgHeight" src="{{ $flower->flowerImage }}" alt="Card image cap">--}}
{{--            <div class="card-body">--}}
{{--                <h5 class="card-title" style="text-align: center">{{ $flower->flowerName }}</h5>--}}
{{--                <h5 class="card-title" style="text-align: center">Rp {{ $flower->flowerPrice }}</h5>--}}
{{--            </div>--}}
{{--            <a href="/category/{{ $flower->id }}/details" class="btn btn-primary btn-lg btn-block">See Description</a>--}}
{{--        </div>--}}

                <div class="col-lg-4 text-center mt-5">
                    <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ $flower->flowerImage }}"/>
                    <h2>{{ $flower->flowerName }}</h2>
                    <h3>Rp {{ $flower->flowerPrice }}</h3>
                    <p><a class="btn btn-secondary" href="/category/{{ $flower->id }}/details" role="button">See Description</a></p>

                    @if(Auth::check())
                    @if((Auth::user()->userRole == 1))
                        <div>
                            <p><a class="btn btn-danger" href="/category/{{ $flower->flower_category_id }}" role="button">Delete Flower</a></p>
                            <p><a class="btn btn-primary" href="/category/{{ $flower->id }}/update" role="button">Update Flower</a></p>
                        </div>
                    @endif
                    @endif
                </div>
        @endif
    @endforeach
    </div>
@endsection
