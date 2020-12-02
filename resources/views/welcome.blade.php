@extends('layouts.app')

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
    <h1>Welcome to Flowelto Shop</h1>
    <h2>The Best Flower Shop in Binus University</h2>
@endsection
