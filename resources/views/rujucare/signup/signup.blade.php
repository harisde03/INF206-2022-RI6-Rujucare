@extends('base')

{{-- http://127.0.0.1:8000/signup --}}

@section('title', 'Signup')

@section('content')
<section class="vh-90">
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        <h1>Komunitas Fasilitas Kesehatan Terbesar Se-Indonesia</h1>
                    </div>
                    <div class="col border">
                        <form action="/signup" method="post">
                            @csrf

                            <div class="m-5">
                                <div class="">
                                    <h4>Daftar Fasilitas Kesehatan</h4>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email Fasilitas Kesehatan" name="email" required value={{old('email')}}>
                                    @error('email')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control @error('namaFaskes') is-invalid @enderror" placeholder="Nama Fasilitas Kesehatan" name="namaFaskes" required value={{old('namaFaskes')}}>
                                    @error('namaFaskes')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control @error('tingkatFaskes') is-invalid @enderror" placeholder="Tingkat Fasilitas Kesehatan" name="tingkatFaskes" required value={{old('tingkatFaskes')}}>
                                    @error('tingkatFaskes')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required >
                                    @error('tingkatFaskes')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="password" class="form-control" placeholder="Konfirmasi Password" name="confirm-password" required>
                                </div>

                                <div class="mt-3">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label"for="exampleCheck1">Dengan menekan tombol daftar anda telah sepenuhnya menyetujui  <a href="{{ URL('/signup/persetujuan') }}" class="text-teal text-decoration-none">persetujuan</a> dan <a href="{{ URL('/signup/persyaratan') }}" class="text-teal text-decoration-none">persyaratan</a> dari layanan kami</label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-teal" role="button">Daftar</button>
                                    {{-- <a href="/signup" class="btn btn-teal" role="button">Daftar</a> --}}
                                </div>
                                <input type="hidden" class="border-0" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
