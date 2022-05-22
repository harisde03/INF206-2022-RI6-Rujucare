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
                    Dengan menggunakan atau menelusuri situs webstie Rujucare ini, Anda mengakui bahwa Anda telah membaca, memahami, dan setuju untuk terikat syarat dan ketentuan ini serta seluruh peraturan perundang-undangan yang berlaku.
Jika Anda tidak setuju untuk terikat dengan syarat dan ketentuan ini, jangan gunakan situs ini.
Kami dapat mengubah syarat dan ketentuan ini sewaktu-waktu tanpa pemberitahuan terlebih dahulu.
Oleh karena itu, kami menyarankan agar Anda mengunjungi situs ini secara berkala guna mempelajari kembali syarat dan ketentuan ini.
Jika Anda menggunakan situs ini setelah kami melakukan perubahan, Anda setuju untuk menerima perubahan tersebut, terlepas dari apakah Anda sudah benar-benar mempelajarinya atau tidak.
                    </p>
                </div>
            </div>
        </div>
    </div>
   
@endsection
