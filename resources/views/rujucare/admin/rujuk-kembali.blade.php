@extends('base')

{{-- http://127.0.0.1:8000/admin/rujuk-kembali --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Rujuk Kembali')

@section('content')
    <section class="vh-90">
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <h1 class="d-flex justify-content-center">Pengembalian Surat Rujukan</h1>
                <br><br>
                <form action="">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <h4>Nomor BPJS</h4>
                                <input type="text" class="form-control" placeholder="Telepon Publik">
                                <p>Nomor BPJS memiliki data informasi pasien secara lengkap. Pastikan tidak salah dalam
                                    penginputan data.</p>
                            </div>
                            <div class="">
                                <h4>Deskripsi Alasan Pengembalian Rujukan</h4>
                                <textarea class="form-control" rows="5" placeholder="Deskripsi Fasilitas Kesehatan"></textarea>
                                <p>Deskripsikan secara rinci alasan pengembalian rujukan.</p>
                            </div>
                            <div class="">
                                <h4>Upload Rujukan Kembali <i class="fa fa-arrow-right" aria-hidden="true"></i></h4>
                            </div>
                            <a href="#" class="btn btn-teal">Ajukan</a>
                        </div>
                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-center border"
                                style="height: 400px; width: 400px">
                                <img src="{{ URL::asset('assets/images/drop-file.png') }}" alt="Drop File Here"
                                    class="p-5" style="height: 350px">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
