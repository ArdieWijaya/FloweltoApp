@extends('layouts.app')
@section('judul', 'Add Flower')

@section('content')
    <div class="col-md-12">
    <form method="POST" action={{ route('addflower') }}>
        @csrf
        <div class="form-group row">
            <label for="flower_category_id" class="col-md-4 col-form-label text-md-right">Flower Category</label>
            <div class="col-md-6">
                <select class="form-control @error('flower_category_id') is-invalid @enderror" id="flower_category_id">
                    @foreach(\App\FlowerCategory::all() as $flower_category)
                    <option id="{{ $flower_category->id }}" name="{{ $flower_category->id }} value="{{ $flower_category->id }}">{{ $flower_category->flowerCategoriesName }}</option>
                    @endforeach
                </select>
                @error('flower_category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Flower Name') }}</label>
            <div class="col-md-6">
                <input id="flowerName" type="text" class="form-control @error('flowerName') is-invalid @enderror" name="flowerName">
                @error('flowerName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Flower Price') }}</label>
            <div class="col-md-6">
                <input id="flowerPrice" type="number" class="form-control @error('flowerPrice') is-invalid @enderror" name="flowerPrice" min="50000">
                @error('flowerPrice')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="flowerImage" class="col-md-4 col-form-label text-md-right">Flower Image</label>
            <div class="col-md-6">
                <input type="file" class="form-control-file" id="flowerImage" name="flowerImage">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary" href="/">Add</button>
        </div>
    </form>
    </div>
@endsection
