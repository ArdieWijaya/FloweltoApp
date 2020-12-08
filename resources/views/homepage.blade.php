@extends('layouts.app')
@section('judul', 'Homepage')

@section('content')

    <div class = "container">
        @guest
            <h5>Guest</h5>
        @endguest
        @auth
            @if(Auth::user()->userRole == 1)
                <h5>Hi, you are an Admin!</h5>
            @else
                <h5>Hi, {{ Auth::user()->username }}.</h5>
            @endif
        @endauth
        <h1 style="text-align: center">Welcome to Flowelto Shop</h1>
        <h2 style="text-align: center" class="pb-5">The Best Flower Shop in Binus University</h2>

        <!-- Body -->
        <div class="container">
            <div class="row">
                @foreach($flower_categories as $flower_category)
                    <div class="col-lg-4 text-center mt-5">
                        <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ $flower_category->flowerCategoriesImage }}"/>
                        <h2>{{ $flower_category->flowerCategoriesName }}</h2>
                        <p><a class="btn btn-secondary" href="/category/{{ $flower_category->id }}" role="button">View flowers »</a></p>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
