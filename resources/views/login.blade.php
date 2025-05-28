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
    <div class="container-fluid d-flex justify-content-center align-items-center"
        style="min-height: 80vh; background: url('{{ asset('img/autumncandle.jpeg') }}') no-repeat center center; background-size: cover;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">
                {{-- <div class="text-center mb-5">
                    <h1 class="display-4" style="font-family: 'Playfair Display'; color: #603700;">Lumière</h1>
                    <p class="lead" style="color: #603700;">The Art of Sabine Scenes</p>
                </div> --}}

                <div class="card shadow-sm border-0 p-4" style="background-color: #FFF3EB; border-radius: 10px;">
                    <div class="card-body">
                        <h2 class="text-center mb-4" style="color: #603700;">Login</h2>   

                        <form method="GET" action="{{ route('home') }}">
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 border-bottom rounded-0 p-0"
                                    id="email" name="email"
                                    style="background-color: transparent; border-color: #603700 !important; color: #603700;"
                                    placeholder="Enter your email">
                            </div>

                            <div class="mb-4">
                                <input type="password" class="form-control border-0 border-bottom rounded-0 p-0"
                                    id="password" name="password"
                                    style="background-color: transparent; border-color: #603700 !important; color: #603700;"
                                    placeholder="Enter your password">
                            </div>

                            <div class="mb-3 text-end">
                                <a href="{{ route('forgetpassword') }}" class="text-decoration-none"
                                    style="color: #603700;">Forget Password?</a>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-block py-2"
                                    style="background-color: #603700; color: white;">Login Now</button>
                            </div>

                            <div class="text-center">
                                <p class="mb-0" style="color: #603700;">Don't have an account?
                                    <a href="{{ route('signup') }}" class="text-decoration-none fw-bold"
                                        style="color: #603700;">Signup now</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
