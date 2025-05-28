@extends('base')

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg z-3" role="alert" style="min-width: 300px;">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg z-3" role="alert" style="min-width: 300px;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<style>
    .page-title:after{
        left: 46.5%;
    }
    body {  background-color: #f8f4ee; }
    main {
        background-color: #f8f4ee;
    }
</style>

@section('content')
<div class="container py-5" style="font-family: 'Playfair Display'; background-color: #f8f4ee;">
    <h2 class="mb-5 text-center fw-bold pb-2 page-title">Wishlist</h2>

    @if(is_array($wishlist) && count($wishlist) > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($wishlist as $id => $item)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{  asset('productimages/'.$item['image_url']) }}" 
                             class="card-img-top" 
                             alt="{{ $item['name'] }}" 
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold">{{ $item['name'] }}</h5>
                            <p class="card-text text-muted mb-4">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                            <div class="mt-auto d-flex justify-content-between">
                                {{-- Add to Cart --}}
                                <form action="{{ route('add_to_cart', $id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1">
                                    <button class="btn btn-dark btn-sm">Add to Cart</button>
                                </form>

                                {{-- Remove from Wishlist --}}
                                <form action="{{ route('remove_from_wishlist', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted fs-5">Your cart is empty</p>
    @endif
</div>
@endsection
