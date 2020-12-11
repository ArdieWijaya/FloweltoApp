@extends('layouts.app')
@section('judul', 'Update Flower')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $flower->flowerImage }}" class="card-img" alt="{{ $flower->flowerImage }}">
                </div>
                <div class="col-md-8">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form method="POST" action={{ route('updateflower', $flower->id) }} class="form" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="flower_category_id" class="col-md-4 col-form-label text-md-right">Flower Category</label>
                                <div class="col-md-6">
                                <select class="form-control" id="flower_category_id" name="flower_category_id">
                                    @foreach($flower_categories as $flower_category)
                                    <option @if($flower_category->id == $flower->flower_category_id) selected @endif value="{{ $flower_category->id }}">{{ $flower_category->flowerCategoriesName }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Flower Name') }}</label>
                            <div class="col-md-6">
                                <input id="flowerName" type="text" class="form-control @error('flowerName') is-invalid @enderror" name="flowerName" value="{{ $flower->flowerName }}">
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
                                    <input id="flowerPrice" type="number" class="form-control @error('flowerPrice') is-invalid @enderror" name="flowerPrice" min="50000" value="{{ $flower->flowerPrice }}">
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
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"> {{ $flower->description }}</textarea>
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

                            <div class="d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary mb-2" value="Update"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
