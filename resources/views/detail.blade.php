@extends('layouts.app')
@section('judul', 'Flower Details')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $flower->flowerImage }}" class="card-img" alt="{{ $flower->flowerImage }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $flower->flowerName }}</h3>
                        <h5 class="card-title">Rp {{ $flower->flowerPrice }}</h5>
                        <p class="card-text">{{ $flower->description }}</p>

                        <p>Input Quantity:</p>
                        <input type="number" id="qtyNumber" min="0" step="1" data-bind="value:qtyNumber"/>

                        <button type="submit" class="btn btn-primary mb-2">Add to Cart</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
