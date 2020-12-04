@extends('layouts.app')
@section('judul', 'Homepage')

@section('content')
    @guest
    <h5>Guest</h5>
    @endguest
    @auth
        @if(Auth::user()->username == 'admin')
            <h5>Hi, you are an Admin!</h5>
        @else
            <h5>Hi, {{ Auth::user()->username }}.</h5>
        @endif
    @endauth
    <h1 style="text-align: center">Welcome to Flowelto Shop</h1>
    <h2 style="text-align: center">The Best Flower Shop in Binus University</h2>
    <div class="container justify-content-center d-flex flex-wrap">
    @foreach($flower_categories as $flower_category)
        <div class="card m-2" style="width: 14rem;">
            <img class="card-img-top imgHeight" height='250px' width='100px' src="{{ $flower_category->flowerCategoriesImage }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">{{ $flower_category->flowerCategoriesName }}</h5>
            </div>
            <a href="/category/{{ $flower_category->id }}" class="btn btn-primary btn-lg btn-block">See All</a>
        </div>
    @endforeach
    </div>
@endsection
