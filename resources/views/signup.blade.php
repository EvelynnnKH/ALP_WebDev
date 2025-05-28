@extends('base')

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center"
        style="min-height: 80vh; background: url('{{ asset('img/autumncandle.jpeg') }}') no-repeat center center; background-size: cover; position: relative;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="text-center">
                    <h1 class="display-4" style="font-family: 'Playfair Display'; color: #ffffff;">Lumière</h1>
                    <p class="lead" style="color: #ffffff;">The Art of Subtle Scents</p>
                </div>

                <div class="card shadow-sm border-0 p-4" style="background-color: #FFF3EB; border-radius: 10px;">
                    <div class="card-body">
                        <h2 class="text-center mb-4" style="color: #603700; font-family:'Playfair Display';">Create Account!</h2>

                        <form id="signupForm">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 border-bottom rounded-0 p-0"
                                    style="background-color: transparent; border-color: #603700 !important; color: #603700;"
                                    placeholder="Enter your name">
                            </div>

                            <div class="mb-4">
                                <input type="email" class="form-control border-0 border-bottom rounded-0 p-0"
                                    style="background-color: transparent; border-color: #603700 !important; color: #603700;"
                                    placeholder="Enter your email">
                            </div>

                            <div class="mb-4">
                                <input type="password" class="form-control border-0 border-bottom rounded-0 p-0"
                                    style="background-color: transparent; border-color: #603700 !important; color: #603700;"
                                    placeholder="Enter your password">
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button type="button" onclick="handleSignup()" class="btn btn-block py-2"
                                    style="background-color: #603700; color: white;">
                                    Create →
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function handleSignup() {
            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 500);
        }
    </script>
@endsection
