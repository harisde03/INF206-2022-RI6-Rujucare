@extends('base')

{{-- http://127.0.0.1:8000/login --}}

@section('title', 'Login')

@section('content')
<section class="vh-90">
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        <h1>Komunitas Fasilitas Kesehatan Terbesar Se-Indonesia</h1>
                    </div>
                    <div class="col border">
                        <form action="">
                            <div class="m-5">
                                <div class="">
                                    <h4>Login Fasilitas Kesehatan</h4>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" placeholder="Email Fasilitas Kesehatan">
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-teal">Login</button>
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
