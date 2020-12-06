@extends('layouts.app')
@section('judul', 'My Cart')

@section('category')
    @foreach($flower_categories as $flower_category)
        <a class="dropdown-item" href="/category/{{ $flower_category->id }}">{{ $flower_category->flowerCategoriesName }}</a>
    @endforeach
@endsection

@section('content')

@endsection
