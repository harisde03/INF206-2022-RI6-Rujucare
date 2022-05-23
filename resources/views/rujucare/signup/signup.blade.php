@extends('base')

{{-- http://127.0.0.1:8000/signup --}}
{{-- Author: Nadia Rimawati --}}

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
                        <form action="/signup" method="POST">
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
                                    <input type="text" class="form-control @error('namaPublik') is-invalid @enderror" placeholder="Nama Fasilitas Kesehatan" name="namaPublik" required value={{old('namaPublik')}}>
                                    @error('namaPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <select name="tingkatPublik" class="form-select">
                                            <option selected="selected">Tingkat 1</option>
                                            <option>Tingkat 2</option>
                                            <option>Tingkat 3</option>
                                    </select>
                                    {{-- <input type="text" class="form-control @error('tingkatPublik') is-invalid @enderror" placeholder="Tingkat Fasilitas Kesehatan" name="tingkatPublik" required value={{old('tingkatPublik')}}> --}}
                                    @error('tingkatPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required >
                                    @error('tingkatPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
                                </div>

                                <div class="mt-3">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
                                    <label class="form-check-label"for="exampleCheck1">Dengan menekan tombol daftar anda telah sepenuhnya menyetujui  <a href="{{ URL('/signup/persetujuan') }}" target="_blank" class="text-teal text-decoration-none">persetujuan</a> dan <a href="{{ URL('/signup/persyaratan') }}" target="_blank" class="text-teal text-decoration-none">persyaratan</a> dari layanan kami</label>
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
