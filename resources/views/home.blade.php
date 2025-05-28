@extends('base')

@section('content')
@php
    $boostedProduct = $products->firstWhere('product_id', 12);
@endphp
<div class="relative w-full main-page" style="margin: auto; max-margin: 150px; background: url('{{ asset('productimages/' . $boostedProduct->image_url) }}') no-repeat center center/cover;">
    {{-- Overlay hitam transparan, mek agak ga ketok gtw knp --}}
    <div class="bg-white bg-opacity-30"></div>
    
    {{-- main content  --}}
    <div class="flex items-center justify-center pt-5 pb-5 lg:py-10">
        <div class="text-center px-4">
            <p class="tracking-wider m-3" style="line-height: 1.6; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.2); font-family: 'Montserrat', sans-serif;">
                <i>#Autumn Festival</i>
            </p>
            <h2 class="font-bold italic" style="font-size: 3.75rem; font-family: 'Playfair Display', serif; color: #ffffff; text-shadow: 1px 1px 3px rgba(153,123,82,0.42);">
                Autumn Package Deals
            </h2>
            <p class="tracking-wider m-3" style="line-height: 1.6; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.2); font-family: 'Montserrat', sans-serif;">
                get your aromatic, woody, and musk comfort through the delightful candles
            </p>
            <a href="{{ route('product') }}" class="btn btn-light m-4 px-5 p-2" style="letter-spacing: 1.5px;">
                SHOP NOW
            </a>
        </div>
    </div>
</div>



{{-- buat card yang ada 4 itu --}}
@php
    $categoryProducts = [
        [
            'image_url' => 'vanillascentedcandle.jpeg',
            'category_name' => 'SCENTED CANDLES',
            'category_id' => 1
        ],
        [
            'image_url' => 'eucalyptusbathbomb.jpeg', 
            'category_name' => 'BATH BOMBS',
            'category_id' => 5
        ],
        [
            'image_url' => 'lemonessentialoil.jpeg', 
            'category_name' => 'ESSENTIAL OILS',
            'category_id' => 8
        ],
        [
            'image_url' => 'autumncandle.jpeg', 
            'category_name' => 'SEASONAL CANDLES',
            'category_id' => 7
        ],
    ];
@endphp

<div class="container-fluid p-0">
    <div class="row g-0">
        @foreach ($categoryProducts as $productShow) 
            <div class="col-sm-3 col-md-6 col-lg-3">
                <div class="category-card" style="background: url('{{ asset('productimages/' . $productShow['image_url']) }}') no-repeat center center/cover; height: 200px;">
                    <div class="category-overlay d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-white fs-3 mb-3" style= "text-align: center;">{{ $productShow['category_name'] }}</h3>
                        <a href="{{ route('category.show', $productShow['category_id']) }}" class="btn btn-light px-4">SHOP</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


{{-- best seller --}}
@php
    $placeholder = [
        [
            'id' => 1,
            'productName' => 'Lavender Essential Oil',
            'description' => 'Calming yet aromatic Lavender essense. Best for sleep.',
            'price' => 75000,
            'image_url' => 'lavenderscentedcandle.jpeg',
            'category_name' => 'Essential Oils'
        ],
        [
            'id' => 5,
            'productName' => 'Flake Soy Wax Melt',
            'description' => 'Easier to melt soy based wax.',
            'price' => 45000,
            'image_url' => 'flakesoywaxmelt.jpeg',
            'category_name' => 'Wax Melt'
        ],
        [
            'id' => 8,
            'productName' => 'Eucalyptus Bath Bomb',
            'description' => 'Homemade eucalyptus bath bombs perfect for at-home wellness.',
            'price' => 60000,
            'image_url' => 'eucalyptusbathbomb.jpeg',
            'category_name' => 'Bath Bombs'
        ]
    ];
@endphp

<div class="container-fluid py-5" style="background-color: #f8f4ee;">
    <div class="text-center mb-5">
        <h2 style="font-size: 2.75rem; font-family: 'Playfair Display'; font-weight: 400; color: #5c3c1d;">BEST SELLER</h2>
    </div>

    <div class="row justify-content-center">
        @foreach ($placeholder as $item)
            <div class="col-10 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex justify-content-center" style="color: #5c3c1d;">
                <div class="text-start" style="width: 250px; height: 400px">
                    <img src="{{ asset('productimages/'.$item['image_url']) }}" alt="Product" class="img-fluid mb-1" style="object-fit: cover; height: 180px; width: 100%;">

                    {{-- See more link --}}
                    <div class="text-end mb-2">
                        <a href="{{ route('product-detil.show', $item['id']) }}" style="font-size: 0.85rem; color: #5c3c1d; text-decoration: underline;">
                            See more...
                        </a>
                    </div>

                    <p class="text-muted mb-1" style="font-style: italic; font-size: 0.9rem;">{{ $item['category_name'] }}</p>
                    <h6 class="mb-1 fw-bold" style="font-size: 1rem;">{{ $item['productName'] }}</h6>
                    <p class="text-muted mb-2" style="font-style: italic; font-size: 0.9rem; height: 70px;">
                        {{ $item['description'] }}
                    </p>

                    <div class="d-flex justify-content-between" style="font-size: 0.95rem;">
                        <span class="fw-bold">Rp. {{ number_format($item['price'], 0, ',', '.') }},-</span>
                        <span class="text-muted" style="font-style: italic;">Rate: 5/5</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>




<style>
    .category-card {
        position: relative;
        overflow: hidden;
    }
    .category-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4);
        transition: all 0.3s ease;
    }
    .category-card:hover .category-overlay {
        background-color: rgba(0, 0, 0, 0.6);
    }
@media (min-width: 1400px) {
    .main-page{
        height: 90vh;
        padding: 5rem;
    }
}
/* Responsif untuk tablet */
@media (min-width: 1185px) {
    .main-page{
        height: 86vh;
        padding: 5rem;
    }
}

/* Responsif untuk mobile */
@media (min-width: 995px) {
    .main-page{
        margin: auto; 
        flex items-center 
        justify-content: center;
        padding-top: 5;
        padding-bottom: 5;
    }
}
</style>

@endsection