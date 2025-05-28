<header class="main-header">
    <nav class="navbar navbar-expand-lg shadow-sm py-2 lumiere-navbar">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3 pb-2">
            
            <div class="searchbox" style="width: 100%; display: flex; gap: 1rem;">
            {{-- Logo kiri --}}
            <a class="navbar-brand lumiere-logo me-3" href="{{ route('home') }}" style="margin: auto; text-align:center">
                <img src="{{ asset('img/logolumiere.png') }}" alt="Lumière" class="brand-logo">
            </a>

            {{-- Search bar tengah --}}
            <div class="searchbar d-flex flex-grow-1 gap-3" style="margin: auto;">
                <form action="{{ route('searched') }}" method="GET" class="search-form d-flex flex-grow-1">
                    <input type="text" name="search" class="form-control search-input" placeholder="Search Product..." required>
                    <button type="submit" class="btn search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                @auth
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="navbarProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_picture ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}" alt="Profile" class="rounded-circle" width="40" height="40">
                        <small class="mt-1 namaorg">{{ Str::before(Auth::user()->name, ' ') }}</small>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarProfileDropdown">
                        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                            @csrf
                            <button type="submit" class="logout-button">Logout</button>
                        </form>

                    </ul>
                </li>
                @endauth

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapseMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            @guest
            <li class="nav-item login-nav" style="margin: auto;">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @endguest
            </div>

                {{-- Menu navigasi --}}
                <div class="collapse navbar-collapse w-80" id="navbarCollapseMenu">
                    {{-- KIRI --}}
                    <ul class="navbar-nav d-flex flex-lg-row flex-column gap-3 mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('product') }}"><i class="fa-solid fa-store me-1"></i>Our Collection</a></li>
                            @can('view-myorder')
                                <li class="nav-item"><form action="{{ route('order.history') }}" method="GET" class="mb-0 myorders">@csrf
                                <button type="submit" class="btn btn-link nav-link p-0"><i class="fas fa-receipt me-1"></i>My Orders</button>
                            </form></li>
                            @endcan
                            @can('view-allorder')
                                <li class="nav-item"><form action="{{ route('orders.show') }}" method="GET" class="mb-0 myorders">@csrf
                                <button type="submit" class="btn btn-link nav-link p-0"><i class="fas fa-receipt me-1"></i>All Orders</button>
                            </form></li>
                        @endcan
                    </ul>

                    {{-- KANAN --}}
                    <ul class="navbar-nav d-flex flex-lg-row flex-column gap-3 ms-lg-auto mb-0 mt-3 mt-lg-0">
                            @can('wishlist-product')
                                <li class="nav-item"><a class="nav-link" href="{{ route('view_wishlist') }}"><i class="fa-solid fa-heart me-1"></i>Wishlist</a></li>
                            @endcan
                            @can('addToCart-product')
                                <li class="nav-item"><a class="nav-link" href="{{ route('view_cart') }}"><i class="fas fa-cart-shopping me-1"></i>Cart</a></li>
                            @endcan
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</header>




<style>

    li.nav-item.dropdown, .login-nav {
    list-style-type: none;
}
   .dropdown-menu button {
    padding: 8px 16px;
}

.logout-form {
    margin: 0; /* hilangkan margin default form */
}

.logout-button {
    all: unset; /* reset semua style default tombol */
    display: block;
    width: 100%;
    padding: 8px 12px;
    text-align: left;
    color: #5c3c1d; /* warna merah (Bootstrap danger) */
    cursor: pointer;
    font-weight: 600;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

/* .logout-button:hover,
.logout-button:focus {
    background-color: #f8d7da; /* warna latar belakang saat hover */
    color: #a71d2a;
    outline: none;
} */

.lumiere-navbar {
    background-color: white;
    border-bottom: 1px solid #eee;
}

.lumiere-logo img {
    height: 40px;
    width: auto;
}

.search-form {
    flex-grow: 1;
    display: flex;
}

.search-input {
    border-radius: 20px 0 0 20px;
    border: 1px solid #ccc;
    padding: 8px 16px;
    font-size: 0.95rem;
    width: 100%;
}

.search-btn {
    border-radius: 0 20px 20px 0;
    border: 1px solid #ccc;
    background-color: #5c3c1d;
    color: white;
    padding: 8px 16px;
}

.search-btn:hover {
    background-color: #835323;
}

.navbar-nav .nav-link, .nama {
    font-size: 0.95rem;
    color: #333;
    padding: 0 8px;
    white-space: nowrap;
}

.navbar-nav .nav-link:hover {
    color: #845a30;
}

@media (max-width: 1440px) {
    .searchbox{

    }
    .search-form{
        width: 80%
    }
}
@media (max-width: 992px) {
    .navbar-nav .nav-link, .nama {
        font-size: 0.95rem;
        color: #333;
        white-space: nowrap;
    }
    .myorders{
        padding-left: 10px;
    }
}
@media (max-width: 495px){
    .navbar-nav{
        flex-wrap: wrap;
    }
    .navbar-brand{
        flex-grow: 1;
        display: flex;
        width: 100%;
        justify-content: center;
    }
    .lumiere-logo {
        display: none;
    }
}
</style>