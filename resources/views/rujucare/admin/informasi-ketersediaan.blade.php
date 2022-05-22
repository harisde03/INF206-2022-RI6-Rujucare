@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-ketersediaan --}}

@section('title', 'Informasi Ketersediaan')

@section('content')
    {{-- Working area --}}
    {{-- Author : Muny Safitri --}}
    <link rel="stylesheet" href="style.css">
    <style>
        .sub-img{
            border-radius: 80%;
            width: 200px;
            height:200px;
        }
    </style>
       

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
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link active" aria-current="page">
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
                    <h2>Informasi Ketersediaan</h2>
                    <hr>
                    <form action="">
                        <div class="row">
                            <div class="col-8">
                                <h3><label for="group-1">Jumlah Rujukan Tersedia</label></h3>
                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="group-1" name="group-1"
                                        value="1" type="number" required>
                                </div>
                                <p>Jumlah rujukan akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div class="col-8">
                                <h3><label for="group-2"></label>Jumlah Kamar Tersedia</h3>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="group-2" name="group-2"
                                        value="1" type="number" required>
                                </div>
                                <p>Jumlah kamar akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div></div>
                        </div>
                        <div class="col"><button class="btn btn-info">Lakukan Perubahan</button></div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="group-3">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="group-1" name="group-3" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="group-4"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="group-2" name="group-2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <img class="sub-img img-thumbnail float-right "
                                        src="{{ URL::asset('assets/images/dokter1.png') }}" alt=""
                                        style="align-self: end">
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-info">Lakukan Perubahan</button>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="group-3">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="group-1" name="group-3" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="group-4"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="group-2" name="group-2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col-5">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <img class="sub-img img-thumbnail" src="{{ URL::asset('assets/images/dokter2.png') }}"
                                        alt="" style="align-self: end">
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-sm btn-info">Lakukan Perubahan</button>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="group-3">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="group-1" name="group-3" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="group-4"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="group-2" name="group-2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <img class="sub-img img-thumbnail " src="{{ URL::asset('assets/images/dokter3.png') }}"
                                        alt="" style="align-self: end">
                                </form>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <button class="btn btn-info">Lakukan Perubahan</button>
                            </div>
                            <div>
                                <button class="btn btn-info">Tambah Spesialis</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
