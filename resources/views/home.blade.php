@extends('layouts.app')

@section('title', 'Homepage')

@php
    $value = $user->points;
    if ($user->loyaltyStatus == 'Gold') {
        $total = 1000;
    } else {
        $total = 200;
    }
@endphp

@section('content')
    <div class="container pb-4">
        <div class="points d-flex align-items-baseline">
            <p class="fs-3 fw-bold pe-2">{{ $user->points }}</p>
            <p class="fs-6 ">out of {{ $total }} points</p>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ $value / $total * 100 }}%" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $total }}"></div>
        </div>
        <div class="redeem-button pt-3">
            <button type="button" class="btn btn-dark btn-sm dark" id="redeem" data-bs-toggle="modal" data-bs-target="#underrecon">
                Redeem
            </button>

            <div class="modal fade" id="underrecon" tabindex="-1" aria-labelledby="underreconLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="underreconLabel">Sorry, this page is under reconstruction :(</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                            <p>Please try again later.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container promotions">
        <h4 class="fw-bold">Today's Promo</h4>
        <div class="card promotion" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title fw-bold">Treat a Friend</h5>
                <p class="card-text">
                    Treat your friend with <strong>Iced Caramel Machiatto</strong> and <strong>Asian Dolce Frappuccino</strong> with <strong>only 65k!</strong></p>
                <a href="#" class="btn btn-dark">Claim Coupon!</a>
            </div>
        </div>
        <div class="card promotion" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title fw-bold">Treat a Friend</h5>
                <p class="card-text">
                    Treat your friend with <strong>Iced Caramel Machiatto</strong> and <strong>Asian Dolce Frappuccino</strong> with <strong>only 65k!</strong></p>
                <a href="#" class="btn btn-dark">Claim Coupon!</a>
            </div>
        </div>
        <div class="card promotion" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title fw-bold">Treat a Friend</h5>
                <p class="card-text">
                    Treat your friend with <strong>Iced Caramel Machiatto</strong> and <strong>Asian Dolce Frappuccino</strong> with <strong>only 65k!</strong></p>
                <a href="#" class="btn btn-dark">Claim Coupon!</a>
            </div>
        </div>
        <div class="card promotion" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title fw-bold">Treat a Friend</h5>
                <p class="card-text">
                    Treat your friend with <strong>Iced Caramel Machiatto</strong> and <strong>Asian Dolce Frappuccino</strong> with <strong>only 65k!</strong></p>
                <a href="#" class="btn btn-dark">Claim Coupon!</a>
            </div>
        </div>
    </div>

    <a href="{{ route("coffees.index") }}" class="btn btn-dark btn-lg floating-btn">Coffee</a>

    <script>
        document.getElementById("redeem").addEventListener("click", function(event) {
          event.preventDefault(); // prevent the default action of the button

          // your code to handle the button click goes here
        });
    </script>

@endsection
