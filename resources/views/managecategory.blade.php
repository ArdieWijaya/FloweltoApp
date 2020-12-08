@extends('layouts.app')
@section('judul', 'Manage Category')

@section('content')
    <h2 style="text-align: center" class="pb-5">Manage Category</h2>

    <!-- Body -->
    <div class="container">
        <div class="row">
            @foreach($flower_categories as $flower_category)
                <div class="col-lg-4 text-center mt-5">
                    <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ $flower_category->flowerCategoriesImage }}"/>
                    <h2>{{ $flower_category->flowerCategoriesName }}</h2>
                    <p><a class="btn btn-danger" href="/" role="button">Delete Category</a></p>
                    <p><a class="btn btn-primary" href="/manage/{{ $flower_category->id }}" role="button">Update Category</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
