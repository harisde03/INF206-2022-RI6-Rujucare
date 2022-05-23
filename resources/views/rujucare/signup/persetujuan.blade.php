@extends('base')

{{-- http://127.0.0.1:8000/signup/persetujuan --}}

@section('title', 'Persetujuan')

@section('content')
<div class="container-xl mb-5">
        <div class="col">
            <div class="row my-4">
                <div class="d-flex" style="width: 280px;">
                    <div class="border border-teal rounded-circle">
                        <i class="fas fa-hospital-alt text-teal" style="padding: 18px 16px; font-size: 32px;"></i><br>
                    </div>
                    <div class="align-self-center ps-3 text-teal text-nowrap">
                        <h5 class="mb-0">Legalitas Rujucare</h5>
                        <h5 class="mb-0 fw-normal">Pre-Registrasi</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-2 d-flex flex-column flex-shrink-0" style="width: 280px;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ URL('/signup/persetujuan') }}" class="nav-link active" aria-current="page">
                                Persetujuan Fasilitas Kesehatan
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL('/signup/persyaratan') }}" class="nav-link link-dark">
                                Persyaratan Fasilitas Kesehatan
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ URL('/signup') }}" class="nav-link link-dark">
                                Kembali
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-8">
                    <h2>Persetujuan Fasilitas Kesehatan</h2>
                    <hr>
                    <p class="text-justify">
                    Dengan membuat sebuah akun sepenuh sadar akan Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an
unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
tihe 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
publishing software like Aldus PageMaker including versions of Lorem Ipsum, sebagai berikut:
- Lorem Ipsum is simpiy dummy text of the printing and typesetting industry.
- Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
- When an unknown printer took a galley of type and serambled it to make a type specimen book.
- It has survived not only five centuries, but also the leap into electronic typesetting,
- But also the leap into electronic typesetting, remaining essentially unchanged,
- Itwas popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
- More recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
   
@endsection
