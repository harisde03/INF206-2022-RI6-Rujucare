@extends('base')

{{-- http://127.0.0.1:8000/faskes --}}
{{-- Author : Muny Safitri --}}

@section('title', 'namaFaskes')

@section('navbar')
    <li class="nav-item" style="padding-left:20px;"> <a href="" class="nav-link">Statistik</a></li>
    <li class="nav-item"  style="padding-left:20px;"> <a href="" class="nav-link">Informasi Spesialis</a></li>
    <li class="nav-item"  style="padding-left:20px;"> <a href="" class="nav-link">Informasi Faskes</a></li>
@endsection



@section('content')
    {{-- Working area --}}
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <style>
        .main-screen{
            background-image: url(assets/images/contohRumahSakit.png);
        }
    </style>

    <div style="border: 0.5px solid #636161;opacity:0.2;"></div>

    <div class ="main-screen align-items-center" style="" id="main-screen"></div>

        <div class ="container vw-100" style="width:auto">
            <div class= "header">
                <h1 id = "">{{$post->namaFaskes}}</h1>
            </div>

            <div class="boxes " id="boxes">
                <ul class="flex-list flex-wrap ">
                    <li class="box">
                        <h1 id="">{{$post->getKredensial->getKetersediaan->rujukanTersedia}}</h1>
                        <div class="box-text">
                            <strong>Rujukan Tersedia</strong>
                            <p >Jumlah rujukan tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                    <li class="box" >
                        <h1 id="">{{$post->getKredensial->getKetersediaan->kamarTersedia}}</h1>
                        <div class="box-text">
                            <strong>Kamar Tersedia</strong>
                            <p >Jumlah kamar tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                </ul>
                @auth
                <div class="buatRujukan col-lg-3 " id="buatRujukan">
                    <button type="button"  >
                        <a href="{{URL('/admin/rujuk')}}" class="btn btn-rujukan btn-info float-right" >
                            <span class="fa fa-plus"></span> Buat Rujukan</a>
                        </button>
                    </div>
                </div>
                @endauth


            </div>


            <div style="border: 1px solid #636161;opacity:1;"></div>

            <div class="screen-spesial" id="screen-spesial">
                <div class="container-xl">
                    <div class=" justify-content">
                        <h1>Spesialis Tersedia</h1>
                        <p>Seluruh Spesialis tersedia di <span>{{$post->namaFaskes}}</span>. Hubungi Fasilitas kesehatan untuk informasi lengkap</p>
                    </div>


                    <div class="boxes col-12 ">
                        <ul class="flex-list d-flex flex-wrap ">
                            @foreach ($post->getKredensial->getSpesialis as $p)
                                <li class="box ">
                                    <div class="box-img center col-12 "  style="background-image: url(assets/images/dokter2.png);background-size:cover; margin:auto">
                                        <img src="{{ URL::asset('assets/images/dokter2.png') }}" alt="" >
                                    </div>
                                    <div class="box-text center col-12">
                                        <strong id="" name="" >{{$p->namaSpesialis}}</strong>
                                        <p>{{$p->kemampuanSpesialis}}</p>
                                    </div>
                                </li>
                           @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-top:50px;border: 0.2px solid #636161; opacity:0.2;"></div>

    <div class="screen-info" id="screen-info">
        <div class="container-xl">
            <div class="text-center justify-content-lg-center">
                <h1>Informasi <span>{{$post->namaFaskes}}</span></h1>
                <p style="margin-top:20px; max-width: 900px; margin: auto; "><span>{{$post->namaFaskes}}</span> mempunyai tugas memberikan pelayanan kesehatan perorangan secara paripurna</p>
            </div>
            <div class="subinfo-kiri">
                <blockquote style="margin-top:50px">
                    <p style="margin-top:100px; border-bottom:1px solid #111;"><strong>Alamat</strong></p>
                    <p id="" href="">{{$post->getKredensial->alamatPublik}}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Tingkat Fasilitas Kesehatan</strong></p>
                    <p id="" href="">{{$post->tingkatFaskes}}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Kontak</strong></p>
                <p id="" href="">Email: <span>{{$post->getKredensial->emailPublik}}</span> <br>Telepon: <span>0551-34565</span> </p>
                </blockquote>

            </div>
            <div class="subinfo-kanan ">
                <img src="{{ URL::asset('assets/images/contohRumahSakit.png') }}"  alt="gambarRumahSakit">
            </div>
        </div>
    </div>
</div>
<!-- Jquery Library file -->
<script src=".asset/js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src=".asset/js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src=".asset/js/aos.js"></script>

<!-- Custom Javascript file -->
<script src=".asset/js/main.js"></script>


@endsection
