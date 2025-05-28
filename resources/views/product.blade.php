<head>
    <link rel="stylesheet" href="{{ asset('css/product-style.css') }}">
</head>

<body>
    @extends('base')
    @section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg z-3" role="alert" style="min-width: 300px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg z-3" role="alert" style="min-width: 300px;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @can('insert-product')
        <div class="list-product">
    <div class="button-container">
        <a href="{{ route('createProduct.show') }}" class="btn btn-insert">Add New Product</a>
    </div>
    @endcan
    

    <div class="main-content">
        <!-- Sidebar Kategori -->
        <div class="sidebar">
            <h3 class="category-title" style="font-family:'Playfair Display';">Categories: </h3>
            
            <!-- Untuk mobile: Toggle kategori -->
            <button class="category-toggle" onclick="toggleCategoryList()">Pilih Kategori</button>
            <div class="category-list-wrapper">
                @foreach ($products->unique('category_id') as $p)
                    <a href="{{ route('category.show', $p->category->category_id) }}" class="category-card">
                        {{ $p->category['name'] }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Grid Produk -->
        <div class="product-grid">
            @foreach ($products as $p)
                <a href="{{ route('product-detil.show', $p->product_id) }}" class="product-card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('productimages/'.$p->image_url) }}" alt="{{ $p->name }}">
                    </div>
                    <p class="product-category">{{ $p->category->name }}</p>
                    <p class="product-name">{{ $p->name }}</p>
                    <p class="card-description">{{ $p->description }}</p>
                    <div class="price-rate">
                        <p class="product-price">Rp. {{ number_format($p->price, 0, ',', '.') }},-</p>
                        <p class="product-rate">Rate: 5/5</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<script>
    function toggleCategoryList() {
        const wrapper = document.querySelector('.category-list-wrapper');
        wrapper.classList.toggle('show');
    }
</script>

    @endsection
</body>