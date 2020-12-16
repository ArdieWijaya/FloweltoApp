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

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif

                        <h3 class="card-title">{{ $flower->flowerName }}</h3>
                        <h5 class="card-title">Rp {{ $flower->flowerPrice }}</h5>
                        <hr>
                        <p class="card-text mt-4 mb-5">{{ $flower->description }}</p>

                            @if(!Auth::check())
                            <div class="form-inline">
                                <label class="sr-only" for="inlineFormInputName2">Input Quantity</label>
                                <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" min=1 placeholder="Quantity" name="qty">
                                <a type="submit" href="/login" class="btn btn-primary mb-2">Add to Cart</a>
                            </div>
                            <p class="text-muted">Hello, guest! Please log in first to access your shopping cart.</p>
                            @else
                                @if(Auth::user()->userRole != 1)
                                    <form method="POST" action={{ route('addtocart', $flower->id) }} class="form-inline">
                                        @csrf
                                        <label class="sr-only" for="inlineFormInputName2">Input Quantity</label>
                                        <input type="number" class="form-control mb-2 mr-sm-2 @error('qty') is-invalid @enderror" id="inlineFormInputName2" placeholder="Quantity" name="qty">
                                        <input type="submit" class="btn btn-primary mb-2"value="Add to Cart"/>
                                        @error('qty')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </form>
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
