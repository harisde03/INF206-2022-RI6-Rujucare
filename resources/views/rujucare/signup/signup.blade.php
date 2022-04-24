@extends('base')

{{-- http://127.0.0.1:8000/signup --}}

@section('title', 'Signup')

@section('content')
<div class="container px-5">
  <div class="row gx-6">
    <div class="col">
     <div class="p-3 border bg-light"><h1>Komunitas Rumah Sakit Terbesar Se-Indonesia</h1></div>
    </div>
    <div class="col">
    <div class="row"><h3>Daftar Rumah Sakit</h3></div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email Rumah Sakit</label>
    </div>
    <div class="form-floating mb-3">
        <input type="nama rumah sakit" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPInput">Nama Rumah Sakit</label>
    </div>
    <div class="form-floating mb-3">
        <input type="tingkat fasilitas kesehatan" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingInput">Tingkat Fasilitas Kesehatan</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Confirm Password</label>
     </div>
     </div>
     <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Dengan menekan tombol anda telah sepenuhnya 
            menyetujui persyaratan dan persetujuan dari layanan
        </label>
     </div>
    <div class="row col-2">
    <button type="button" class="btn btn-success">Daftar</button>
    </div>
    </div>
    </div>
    
@endsection
