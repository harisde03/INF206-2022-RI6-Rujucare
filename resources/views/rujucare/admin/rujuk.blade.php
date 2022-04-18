@extends('base')

{{-- http://127.0.0.1:8000/admin/rujuk --}}

@section('title', 'Rujuk')

@section('content')
{{-- Working area --}}
<style>
    input[type=text],
    textarea {
        width: 95%;
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .files input {
        padding: 120px 0px 85px 35%;
        text-align: center !important;
        margin: 0;
        width: 100% !important;
    }

    .files {
        position: relative
    }

    .files:after {
        pointer-events: none;
        position: absolute;
        top: 60px;
        left: 0;
        width: 50px;
        right: 0;
        height: 56px;
        content: "";
        display: block;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .files:before {
        position: absolute;
        bottom: 10px;
        left: 0;
        pointer-events: none;
        width: 100%;
        right: 0;
        height: 57px;
        content: " drag files here ";
        display: block;
        margin: 0 auto;
        font-weight: 600;
        text-transform: capitalize;
        text-align: center;
    }
</style>

<br> <br>
<p style="font-size: 45px; text-align: center">Pengembalian Surat Rujukan</p>
<br> <br>
<div class="container">
    <form action="">
        <div class="row">
            <div class="col">
                <label for="nbpjs">
                    <h5>Nomor BPJS</h5>
                </label> <br>
                <input type="text" id="nbpjs"">
                <p>Nomor BPJS memiliki data informasi pasien secara lengkap. Pastikan tidak salah dalam penginputan data.</p>
                <label for=" dkpasien">
                <h5>Deskripsi Kebutuhan Pasien</h5>
                </label> <br>
                <textarea id="dkpasien" style="height:200px"></textarea>
                <p>Deskripsikan secara rinci kebutuhan yang dibutuhkan oleh pasien.</p>
                <label for="frujukan">
                    <h5>Upload Surat Rujukan -></h5>
                </label> <br> <br>
                <input type="submit" value="Ajukan">
            </div>
            <div class="col">
                <div class="form-group files">
                    <input type="file" class="form-control" multiple="">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection