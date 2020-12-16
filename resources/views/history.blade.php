@extends('layouts.app')
@section('judul', 'Transaction History')

@section('content')

<div class="container">
    <h1 style="text-align: center">Transaction History</h1>
    <hr>

    @if($transactions->isEmpty())
        <h3 class="text-center text-muted">Tidak ada Transaction History</h1>
    @else
        @foreach($transactions as $transaction)
            <a href="/history/{{ $transaction->id }}"><h5 class="shadow-sm p-3 mb-3 text-center bg-white rounded">Transaction at {{ $transaction->created_at }}</h5></a>
        @endforeach
    @endif
</div>
@endsection
