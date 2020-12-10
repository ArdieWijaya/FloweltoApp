@extends('layouts.app')
@section('judul', 'Transaction History')

@section('content')
<h1 style="text-align: center">Transaction History</h1>
@if($transactions->isEmpty())
    <h1 class="text-center">Tidak ada Transaction History</h1>
@else
    @foreach($transactions as $transaction)
        <a href="/history/{{ $transaction->id }}"><h5>Transaction at {{ $transaction->created_at }}</h5></a>
    @endforeach
    @endif
@endsection
