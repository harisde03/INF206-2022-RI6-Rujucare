@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-profil --}}

@section('title', 'Informasi Profil')

@section('content')
    {{-- Working area --}}
    <div class="container-xl">
        <br>
        <br>
        <h2>Informasi Umum</h2>
        <hr>
        <form action="">
            <div class="row">
                <div class="col-8">
                    <div class="">
                        <h4>Nama Fasilitas Kesehatan</h4>
                        <input type="text" class="form-control" placeholder="Nama Fasilitas Kesehatan">
                        <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan pada menu pencarian.</p>
                    </div>
                    <div class="">
                        <h4>Email Publik</h4>
                        <input type="text" class="form-control" placeholder="Email Publik">
                        <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan.</p>
                    </div>
                    <div class="">
                        <h4>Telepon Publik</h4>
                        <input type="text" class="form-control" placeholder="Telepon Publik">
                        <p>Nomor Telepon merupakan nomor yang dapat dihubungi untuk keadaanemergensi.</p>
                    </div>
                    <div class="">
                        <h4>Deskripsi Fasilitas Kesehatan</h4>
                        <textarea class="form-control" rows="5" placeholder="Deskripsi Fasilitas Kesehatan"></textarea>
                        <p>Deskripsi hanya menampilkan informasi umum terkait fasilitas kesehatan.</p>
                    </div>
                    <div class="">
                        <h4>Alaamt Fasilitas Kesehatan</h4>
                        <textarea class="form-control" rows="5" placeholder="Alamat Fasilitas Kesehatan"></textarea>
                        <p>Alamat fasilitas lengkap.</p>
                    </div>
                    <div class="">
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
                    <div class="">
                        <h4>Foto Profil</h4>
                        <img class="rounded-circle" src="{{ URL::asset('assets\images\contohRumahSakit.png') }}" alt="foto-profil" style="height: 200px; width: 200px;">
                        <p>Foto Profil akan ditampilkan sebagai foto utama Fasilitas Kesehatan. Gunakan foto resolusi tinggi.</p>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
    </div>
@endsection
