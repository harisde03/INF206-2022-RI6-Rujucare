@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-profil --}}

@section('title', 'Informasi Profil')

@section('content')
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
                            <a href="{{ URL('/admin/informasi-profil') }}" class="nav-link active" aria-current="page">
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
                    <h2>Informasi Umum</h2>
                    <hr>
                    <form action="">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-2">
                                    <h4>Nama Fasilitas Kesehatan</h4>
                                    <input type="text" class="form-control my-2" placeholder="Nama Fasilitas Kesehatan">
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu
                                        pencarian.</p>
                                </div>
                                <div class="mt-2">
                                    <h4>Email Publik</h4>
                                    <input type="text" class="form-control my-2" placeholder="Email Publik">
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan.</p>
                                </div>
                                <div class="mt-2">
                                    <h4>Telepon Publik</h4>
                                    <input type="text" class="form-control my-2" placeholder="Telepon Publik">
                                    <p>Nomor Telepon merupakan nomor yang dapat dihubungi untuk keadaanemergensi.</p>
                                </div>
                                <div class="mt-2">
                                    <h4>Deskripsi Fasilitas Kesehatan</h4>
                                    <textarea class="form-control my-2" rows="5" placeholder="Deskripsi Fasilitas Kesehatan"></textarea>
                                    <p>Deskripsi hanya menampilkan informasi umum terkait fasilitas kesehatan.</p>
                                </div>
                                <div class="mt-2">
                                    <h4>Alamat Fasilitas Kesehatan</h4>
                                    <textarea class="form-control my-2" rows="5" placeholder="Alamat Fasilitas Kesehatan"></textarea>
                                    <p>Alamat fasilitas lengkap.</p>
                                </div>
                                <div class="mt-2">
                                    <h4>Tingkat Fasilitas Keshetan</h4>
                                    <select class="form-select">
                                        <option>Pilih Tingkat Fasilitas Kesehatan</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <p>Perubahan tingkat fasilitas kesehatan membutuhkan konfirmasi.</p>
                                </div>
                                <a href="#" class="btn btn-teal">Lakukan Perubahan</a>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4>Foto Profil</h4>
                                    <img class="rounded-circle"
                                        src="{{ URL::asset('assets\images\contohRumahSakit.png') }}" alt="foto-profil"
                                        style="height: 200px; width: 200px;">
                                    <p>Foto Profil akan ditampilkan sebagai foto utama Fasilitas Kesehatan. Gunakan foto
                                        resolusi
                                        tinggi.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
