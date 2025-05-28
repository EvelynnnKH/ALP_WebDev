<head>
    <link rel="stylesheet" href="{{ asset('css/category-style.css') }}">
</head>
<body>
    @extends('base')

    @section('content')
    <div class="full-content">
        <a href={{ route('product') }} class="back-button" title="Back">
            ←
        </a>
        
        <h1>Searching for: "<span class="text-[#845a30]">{{ $searchText }}"</span></h1>
        <div class="product-grid justify-content-center">
            @forelse ($products as $p)
                <a href="{{ route('product-detil.show', $p->product_id) }}" class="product-card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('productimages/'.$p->image_url) }}" alt="{{ $p->name }}">
                    </div>
                    <p class="product-name">{{ $p->name }}</p>
                    <p class="card-description">{{ $p->description }}</p>
                    <div class="price-rate">
                        <p class="product-price">Rp. {{ number_format($p->price, 0, ',', '.') }},-</p>
                        <p class="product-rate">Rate: 5/5</p>
                    </div>
                </a>
            @empty
                <p>There's no product on you search.</p>
            @endforelse
        </div>
    </div>
    @endsection
</body>

