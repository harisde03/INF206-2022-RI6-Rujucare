@extends('base')

{{-- http://127.0.0.1:8000/ --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Homepage')

@section('content')
    {{-- Working Area --}}
    <section class="home_background">
        <div class="home_white_background">
            <div class="container-md position-absolute top-50 start-50 translate-middle">
                <h1>Temukan Faskes Segera</h1>
                <p>Rujucare dapat membantu anda menemukan fasilitas kesehatan untuk melakukan rujukan pasien dengan cepat</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card btn rounded-3">
                            <div class="card-body">
                                <h4 class="card-title">Temukan Fasilitas Kesehatan</h4>
                                <a href="{{ URL('/find/faskes') }}" class="btn btn-primary">Cari</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card btn rounded-3">
                            <div class="card-body">
                                <h4 class="card-title">Temukan Spesialis</h4>
                                <a href="{{ URL('/find/spesialis') }}" class="btn btn-primary">Cari</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
