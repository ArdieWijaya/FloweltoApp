@extends('layouts.app')
@section('judul', 'Update Category')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $flower_categories->flowerCategoriesImage }}" class="card-img" alt="{{ $flower_categories->flowerCategoriesImage }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form method="POST" action={{ route('updatecategorydata', $flower_categories->id) }}>
                            @csrf
                            <div class="form-group row">
                                <label for="flowerCategoryName" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                                <div class="col-md-6">
                                    <input id="flowerCategoriesName" type="text" class="form-control" name="flowerCategoriesName" value="{{ $flower_categories->flowerCategoriesName }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="flowerCategoriesImage" class="col-md-4 col-form-label text-md-right">Category Image</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>

                                <input type="submit" class="btn btn-primary mb-2"value="Update"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
