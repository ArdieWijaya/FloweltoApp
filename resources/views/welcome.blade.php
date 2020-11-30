@extends('layouts.app')

@section('content')
    @guest
    <h1>Guest</h1>
    @endguest
    @auth
        @if(Auth::user()->username == 'admin')
            <h1>Hi, you are an Admin!</h1>
        @else
            <h1>Hi, {{ Auth::user()->username }}.</h1>
        @endif
    @endauth

@endsection
