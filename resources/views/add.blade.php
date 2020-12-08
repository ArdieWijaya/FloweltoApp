@extends('layouts.app')
@section('judul', 'Add Flower')

@section('content')
    <div class="col-md-12">
    <form>
        <div class="form-group row">
            <label for="flower_category_id" class="col-md-4 col-form-label text-md-right">Flower Category</label>
            <div class="col-md-6">
                <select class="form-control" id="flower_category_id">
                    <option>Hand Bouquet</option>
                    <option>Dried Flowers Bouquet</option>
                    <option>Flower Box</option>
                    <option>Balloon Flower Box</option>
                    <option>Doll Bouquet</option>
                    <option>Chocolate Bouquet</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Flower Name') }}</label>
            <div class="col-md-6">
                <input id="flowerName" type="text" class="form-control" name="flowerName"">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Flower Price') }}</label>
            <div class="col-md-6">
                <input id="flowerPrice" type="number" class="form-control" name="flowerPrice" min="50000"">
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3""></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="flowerImage" class="col-md-4 col-form-label text-md-right">Flower Image</label>
            <div class="col-md-6">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary" href="/">Add</button>
        </div>
    </form>
    </div>
@endsection
