@extends('layouts.app')
@section('judul', 'View Flower')

@section('content')

    <h1 style="text-align: center" class="mb-5">{{ $flower_categories->flowerCategoriesName }} Catalog</h1>
    <div class="container">
        <form method="GET" action="/search">
        <div class="form-row">
            <select class="custom-select col mr-4" name="category">
                <option selected value="1">Name</option>
                <option value="2">Price</option>
            </select>
            <input type="text" class="col-7 mr-4" id="search" name="search" placeholder="Search here...">
            <input type="hidden" value="{{ $flower_categories->id }}" name="flower_categories_id">
            <button type="submit" class="col btn btn-primary">Search</button>
        </div>
        </form>
    </div>
    <div class="container justify-content-center d-flex flex-wrap mb-5">
    @foreach($flowers as $flower)
                <div class="col-lg-4 text-center mt-5">
                    <img class="bd-placeholder-img rounded-circle shadow mb-4" width="160" height="160" src="{{ $flower->flowerImage }}"/>
                    <h2>{{ $flower->flowerName }}</h2>
                    <h3>Rp {{ $flower->flowerPrice }}</h3>
                    <p><a class="btn btn-secondary" href="/category/{{ $flower->id }}/details" role="button">See Description</a></p>

                    @if(Auth::check())
                    @if((Auth::user()->userRole == 1))
                        <div>
                            <form method="GET" action="/category/{{ $flower->flower_category_id }}/delete">
                                <input type="hidden" name="id" value="{{ $flower->id }}">
                                <p><button class="btn btn-danger" type="submit" role="button">Delete Flower</button></p>
                            </form>
                            <p><a class="btn btn-primary" href="/category/{{ $flower->id }}/update" role="button">Update Flower</a></p>
                        </div>
                    @endif
                    @endif
                </div>
    @endforeach
    </div>
    <div class="container d-flex justify-content-center">
        {{ $flowers->links() }}
    </div>
@endsection
