@extends('layouts.app')
@section('judul', 'View Flower')

@section('content')
    <h1 style="text-align: center">Flower Category: {{ $flower_categories->flowerCategoriesName }}</h1>
    <div class="container justify-content-center d-flex flex-wrap">
    @foreach($flowers as $flower)
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
    @endforeach
    </div>
@endsection
