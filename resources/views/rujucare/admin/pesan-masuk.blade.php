@extends('base')

{{-- http://127.0.0.1:8000/admin/pesan-masuk --}}

@section('title', 'Pesan Masuk')

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
                                <a href="{{ URL('/admin/pesan-masuk') }}" class="nav-link active" aria-current="page">
                                    Pesan Masuk
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL('/admin/pesan-keluar') }}" class="nav-link link-dark">
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
                        <h2>Informasi Pesan Masuk</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($post as $p )

                                <div class="accordion mb-3" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo{{$p->id}}"  aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <strong> {{$p->asalFaskes}}: {{$p->deskripsi}} </strong>
                                            </button>
                                        </h2>
                                        <div id="demo{{$p->id}}" class="accordion-collapse collapse"
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
                                                                    <a class="btn btn-danger"
                                                                        href="{{ URL('/admin/rujuk-kembali') }}"
                                                                        role="button">Tolak</a>
                                                                    <a class="btn btn-teal"
                                                                        href="{{ URL('admin/pesan-keluar') }}"
                                                                        role="button">Terima</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>
@endsection
