@extends('base')

{{-- http://127.0.0.1:8000/signup/upload-surat --}}

@section('title', 'Upload Surat')

@section('content')
<section class="vh-90">
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <h1 class="d-flex justify-content-center">Upload Surat Pernyataan Persetujuan</h1>
                <br><br>
                <form action="">
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-center border"
                                style="height: 400px; width: 400px">
                                <img src="{{ URL::asset('assets/images/drop-file.png') }}" alt="Drop File Here"
                                    class="p-5" style="height: 350px">
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <h4>Surat Pernyataan</h4>
                                <p>Kami telah mengirimkan sebuah email yang berisi template surat persetujuan. Jika tidak
                                    email tidak masuk, lakukan <a href="" class="text-teal text-decoration-none">resend</a>.
                                </p>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-teal">Ajukan</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
