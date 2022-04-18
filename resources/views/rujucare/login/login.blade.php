@extends('base')

{{-- http://127.0.0.1:8000/login --}}

@section('title', 'Login')

@section('content')
<div class="container px-5">
  <div class="row gx-6">
    <div class="col">
     <div class="p-3 border bg-light"><h1>Komunitas Rumah Sakit Terbesar Se-Indonesia</h1></div>
    </div>
    <div class="col">
    <div class="row"><h3>Login Rumah Sakit</h3></div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
        <div class="row">
        <button type="button" class="btn btn-success" style ="margin-top:20px;">Login</button>
    </div>
        <div class="row" style ="margin-top:20px;">
        <p>Belum Mendaftarkan Rumah Sakit? <a href="{{URL('/signup')}}">Ajukan Pendaftaran</a></p>
    </div>
    </div>
@endsection
