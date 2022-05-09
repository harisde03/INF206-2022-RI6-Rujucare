@extends('base')

{{-- http://127.0.0.1:8000/admin/pesan-keluar --}}

@section('title', 'Pesan Keluar')

@section('content')
<section class="min-vh-90">
        <div class="container-xl mb-5">
            <div class="col">
                <div class="row my-4">
                    <div class="d-flex" style="width: 280px;">
                        <img class="rounded-circle" src="{{ URL::asset('assets\images\contohRumahSakit.png') }}"
                            alt="foto-profil" style="height: 64px; width: 64px;">
                        <div class="align-self-center ps-3 text-teal text-nowrap">
                            <h5 class="mb-0">Rumah Sakit Umum Dr. Zainoel Abidin</h5>
                            <h5 class="mb-0 fw-normal">Informasi Umum</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 d-flex flex-column flex-shrink-0" style="width: 280px;">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link link-dark">
                                    Informasi Ketersediaan
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL('/admin/informasi-profil') }}" class="nav-link link-dark">
                                    Informasi Profil Umum
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ URL('/admin/pesan-masuk') }}" class="nav-link link-dark">
                                    Pesan Masuk
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL('/admin/pesan-keluar') }}" class="nav-link active"
                                aria-current="page">
                                    Pesan Keluar
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ URL('/faskes') }}" class="nav-link link-dark">
                                    Simpan dan Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-8">
                        <h2>Informasi Pesan Keluar</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="accordion mb-3" id="accordionSurat">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <strong> RSUDZA : Mohon Pemeriksaan dan Perawatan Inap </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col">
                                                        <div class="row">
                                                            <img src="{{ URL::asset('assets/images/example.png') }}"
                                                                alt="surat rujukan">
                                                        </div>
                                                        <div class="row">
                                                            <div class="d-flex">
                                                                <div class="p-2 flex-grow-1">
                                                                    <a class="btn btn-danger" href="#" role="button"><i
                                                                            class="fa fa-trash"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                                <div class="p-2">
                                                                    <button class="btn btn-danger" disabled>Pending</button>
                                                                    <button class="btn btn-teal"
                                                                        disabled>Approved</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection