@extends('base')

{{-- http://127.0.0.1:8000/ --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Homepage')

@section('content')
    {{-- Working Area --}}
    <section class="home_background">
        <div class="home_white_background">
            <div class="container position-absolute top-50 start-50 translate-middle">
                <h1>Temukan Faskes Segera</h1>
                <p>Rujucare dapat membantu anda menemukan fasilitas kesehatan untuk melakukan rujukan pasien dengan cepat</p>
                <table>
                    <td>
                        <div class="card btn" style="padding: 24px 0; width: 320px;">
                            <div class="card-body">
                                <i class="fas fa-user-md" style="font-size: 64px;"></i>
                                <br><br>
                                <h4 class="card-title">Temukan Fasilitas Kesehatan</h4>
                            </div>
                        </div>
                    </td>
                    <td style="width: 5%;"></td>
                    <td>
                        <div class="card btn" style="padding: 24px 0; width: 320px;">
                            <div class="card-body">
                                <i class="fas fa-hospital-alt" style="font-size: 64px;"></i>
                                <br><br>
                                <h4 class="card-title">Temukan Spesialis</h4>
                            </div>
                        </div>
                    </td>
                </table>
            </div>
        </div>
    </section>
@endsection
