@extends('base')

{{-- http://127.0.0.1:8000/ --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Homepage')

@section('content')
    <section class="home_background vh-90">
        <div class="d-flex align-items-center h-100" style="background-color: rgba(238, 238, 238, 0.75);">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <h1>Temukan Faskes Segera</h1>
                        <p>Rujucare dapat membantu anda menemukan fasilitas kesehatan untuk melakukan rujukan pasien dengan cepat.</p>
                    </div>
                </div>
                <div class="row text-center g-1">
                    <div class="card col-12 col-md-5 col-lg-4 col-xxl-3 align-self-center" style="padding: 32px; margin: 16px 16px 0px 0px; border-radius: 30px;">
                        <i class="fas fa-user-md" style="font-size: 64px;"></i><br>
                        <h5>Temukan Spesialis</h5>
                        <a href="{{ URL('/find/spesialis') }}" class="stretched-link"></a>
                    </div>
                    <div class="card col-12 col-md-5 col-lg-4 col-xxl-3 align-self-center" style="padding: 32px; margin: 16px 16px 0px 0px; border-radius: 30px;">
                        <i class="fas fa-hospital-alt" style="font-size: 64px;"></i><br>
                        <h5>Temukan Fasilitas Kesehatan</h5>
                        <a href="{{ URL('/find/faskes') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
