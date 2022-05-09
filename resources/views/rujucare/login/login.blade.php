@extends('base')

{{-- http://127.0.0.1:8000/login --}}

@section('title', 'Login')

@section('content')
<section class="vh-90">
    {{-- @dd(request()) --}}
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">

                <div class="row">
                    @if(session()->has('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('loginError')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <div class="col d-flex align-items-center justify-content-center">
                        <h1>Komunitas Fasilitas Kesehatan Terbesar Se-Indonesia</h1>
                    </div>
                    <div class="col border">
                        <form action="/admin/informasi-ketersediaan" method="post">
                            @csrf
                            <div class="m-5">
                                <div class="mb-2">
                                    <h4>Login Fasilitas Kesehatan</h4>
                                </div>
                                <div class="mt-4">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Fasilitas Kesehatan" autofocus required value={{old('email')}}>
                                    @error('email')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required >
                                    @error('password')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button href="{{ URL('/admin/informasi-ketersediaan') }}" type="button" class="btn btn-teal">Login</button>
                                </div>
                                <div class="mt-3">
                                    <p>Belum Mendaftarkan Fasilitas Kesehatan? <a href="{{ URL('/signup') }}" class="text-decoration-none text-teal">Ajukan Pendaftaran</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
