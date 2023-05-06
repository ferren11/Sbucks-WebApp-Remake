@extends('layouts.app')

@section('title', 'Transaction History')

@section('content')
    <div class="container pb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-medium">{{ __('Transaction History') }}</div>

                    <div class="card-body">
                        @foreach ($transactions as $transaction)
                        @if ($transaction->user_id == $user->id)
                            {{-- {{ $transaction->coffee ? $transaction->coffee->coffeeName : 'N/A' }} --}}
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title fw-medium">#TR{{ $transaction->id }}</h5>
                                    <p class="card-text">Date: {{ $transaction->transactionDate}}</p>
                                    <p class="card-text">Order: {{ $transaction->coffee->coffeeName }}</p>
                                    <p class="card-text">Price: {{ $transaction->coffee->coffeePrice }}</p>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
