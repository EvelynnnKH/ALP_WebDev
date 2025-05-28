@extends('base')

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg z-3" role="alert" style="min-width: 300px;">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<style>
    .page-title:after{
        left: 46.5%;
    }
    main{
        background-color: #f8f4ee;
    }
</style>

@section('content')
<div class="container py-5" style="font-family: 'Playfair Display';">
    <h2 class="mb-5 text-center fw-bold pb-2 page-title">Cart</h2>

    @if(is_array($cart) && count($cart) > 0)
        <div class="d-none d-md-flex fw-semibold text-muted border-bottom pb-3">
            <div class="col-md-5">Product</div>
            <div class="col-md-2 text-center">Quantity</div>
            <div class="col-md-2 text-end">Price</div>
            <div class="col-md-2 text-end">Total</div>
        </div>

        @php $total = 0; @endphp

        @foreach ($cart as $id => $item)
            @php 
                $itemTotal = $item['price'] * $item['quantity'];
                $total += $itemTotal;
            @endphp
            <div class="row align-items-center border-bottom py-3">
                {{-- Product --}}
                <div class="col-md-5 d-flex align-items-center">
                    <img src="{{ asset('productimages/'.$item['image_url']) }}"
                         alt="{{ $item['name'] }}"
                         style="width: 80px; height: 80px; object-fit: cover;"
                         class="me-3">
                    <div>
                        <div class="fw-semibold">{{ $item['name'] }}</div>
                        <div class="text-muted small d-md-none mt-1">Rp {{ number_format($item['price'], 0, ',', '.') }}</div>
                    </div>
                </div>

                {{-- Quantity --}}
                <div class="col-md-2 text-center">{{ $item['quantity'] }}</div>

                {{-- Price --}}
                <div class="col-md-2 text-end d-none d-md-block">
                    Rp {{ number_format($item['price'], 0, ',', '.') }}
                </div>

                {{-- Total --}}
                <div class="col-md-2 text-end">
                    Rp {{ number_format($itemTotal, 0, ',', '.') }}
                </div>

                {{-- Remove --}}
                <div class="col-md-1 text-end">
                    <form action="{{ route('remove_from_cart', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm" style="border-radius: 3px;">Remove</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{-- Total dan Checkout --}}
        <div class="text-end mt-3">
            <div>Total: Rp {{ number_format($total, 0, ',', '.') }}</div>
            <form action="{{ route('checkout') }}" method="POST" class="mt-3">
            @csrf
            @foreach ($cart as $index => $item)
                <input type="hidden" name="cart[{{ $index }}][name]" value="{{ $item['name'] }}">
                <input type="hidden" name="cart[{{ $index }}][price]" value="{{ $item['price'] }}">
                <input type="hidden" name="cart[{{ $index }}][quantity]" value="{{ $item['quantity'] }}">
            @endforeach
    <button type="submit" class="btn btn-dark btn-lg" style="font-size: 14px; border-radius: 3px;">C H E C K O U T</button>
</form>

        </div>
    @else
        <p class="text-center text-muted fs-5">Your cart is empty</p>
    @endif
</div>
@endsection