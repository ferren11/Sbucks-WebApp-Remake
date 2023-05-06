@extends('layouts.app')

@section('title', 'Coffee List')

@section('content')
    <div class="container-scrollable">
        <div class="container d-flex text-center justify-content-between pb-4">
            <div class="pe-2">
                <button type="button" class="btn btn-primary-custom filter-btn" data-filter="all">All</button>
            </div>
            <div class="pe-2">
                <button type="button" class="btn btn-primary-custom filter-btn" data-filter="Espresso">Espresso</button>
            </div>
            <div class="pe-2">
                <button type="button" class="btn btn-primary-custom filter-btn" data-filter="Blended">Blended</button>
            </div>
            <div class="pe-2">
                <button type="button" class="btn btn-primary-custom filter-btn" data-filter="Brewed">Brewed</button>
            </div>
            <div class="pe-2">
                <button type="button" class="btn btn-primary-custom filter-btn" data-filter="Others">Others</button>
            </div>
        </div>
    </div>

    <div class="row coffee-list">
        @foreach($coffees as $coffee)
        <div class="col-md-3 coffee-item" data-category="{{ $coffee->type }}">
            <div class="card mb-4">
                <img src="{{ URL::asset('images/coffees/'.$coffee->coffeeName.'.jpg') }}" class="card-img-top" alt="{{ $coffee->coffeeName }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $coffee->coffeeName }}</h5>
                    <p class="card-text">{{ $coffee->coffeePrice }}</p>
                    <button class="btn btn-dark order-btn" data-bs-toggle="modal" data-bs-target="#order-modal" data-user-id="{{ $user->id }}" data-coffee-id="{{ $coffee->id }}" data-coffee-name="{{ $coffee->coffeeName }}" data-coffee-price="{{ $coffee->coffeePrice }}">
                        Order Now
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- modal // pop-up for the confirmation --}}
    <div class="modal fade" id="order-modal" tabindex="-1" aria-labelledby="order-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="order-modal-label">Order Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" ></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-dark" id="confirm-order-btn">Buy</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // coffee list filtering
        // Add active class to the first button by default
        // $(".filter-btn").removeClass("active");
        $(".filter-btn:first").addClass("active");

        // Handle button click event
        $(".filter-btn").click(function() {
            // Remove active class from all buttons
            $(".filter-btn").removeClass("active");

            // Add active class to the clicked button
            $(this).addClass("active");

            // Filter coffee items based on the clicked button's data-filter value
            var category = $(this).data("filter");

            $(".coffee-item").each(function() {
                var itemCategory = $(this).data("category");
                if (category === "all" || itemCategory === category) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
                if (typeof itemCategory === "undefined") {
                    console.error("Missing data-category attribute for coffee item:");
                    console.error(this);
                }
            });
        });

        // coffee ordering
        $(".order-btn").click(function() {
            var coffeeName = $(this).data("coffee-name");
            var coffeePrice = $(this).data("coffee-price");
            var coffeeId = $(this).data("coffee-id");
            var userId = $(this).data("user-id");

            // Set the coffee name and price in the modal body
            $("#order-modal .modal-body").html("Do you want to buy a cup of " + coffeeName + " for Rp" + coffeePrice + "?");

            // Store the coffee ID and user ID in a variable for later use
            $("#confirm-order-btn").data("coffee-id", coffeeId);
            $("#confirm-order-btn").data("user-id", userId);

            // Show the modal
            $("#order-modal").modal("show");
        });

        // confirmation
        $("#confirm-order-btn").click(function() {
            // get input values
            var coffee_id = $("#confirm-order-btn").data("coffee-id");
            var user_id = $("#confirm-order-btn").data("user-id");

            console.log(coffee_id);
            console.log(user_id);
            // Send an AJAX request to the server to insert the new transaction
            $.ajax({
                url: "{{ route('dataInsert') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {user_id: user_id, coffee_id: coffee_id},
                success: function(response) {
                    // Show a success message
                    alert("Your order has been placed!");
                    $("#order-modal").modal("hide");
                    console.log(response);
                },
                error: function(e) {
                // Show an error message
                alert("An error occurred while placing your order: " + e.responseText);
                console.log(e);
                }
            });
        });
    </script>
@endsection
