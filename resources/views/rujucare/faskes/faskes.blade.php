@extends('base')

{{-- http://127.0.0.1:8000/faskes --}}
{{-- Author : Muny Safitri --}}

@section('title', $post->namaFaskes)

@section('navbar')
<li class="nav-item" style="padding-left:20px;"> <a href="" class="nav-link">Statistik</a></li>
<li class="nav-item" style="padding-left:20px;"> <a href="" class="nav-link">Informasi Spesialis</a></li>
<li class="nav-item" style="padding-left:20px;"> <a href="" class="nav-link">Informasi Faskes</a></li>
@endsection

@section('content')
{{-- Working area --}}
<link rel="stylesheet" href="{{asset('style.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

@if($post->faskesPicture !==NULL)
   <style>
        .main-screen{
            background-image: url('{{ asset('storage/'.$post->faskesPicture) }}');
        }
    </style>
@else
    <style>
        .main-screen{
            background-image: url(https://source.unsplash.com/1200x600/?hospital-buildings);;
        }
    </style>
@endif
<div style="border: 0.5px solid #636161;opacity:0.2;"></div>
    <div class ="main-screen align-items-center" style="" id="main-screen">
        <div class ="container vw-100" style="width:auto">
            <h1 class="faskes" id = "">{{$post->namaFaskes}}</h1>
            <div id="boxes">
                <ul class="flex-list flex-wrap ">
                    <li class="box">
                        <h1 id="">{{$post->getKetersediaan->rujukanTersedia}}</h1>
                        <div class="box-text">
                            <strong>Rujukan Tersedia</strong>
                            <p >Jumlah rujukan tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                    <li class="box" >
                        <h1 id="">{{$post->getKetersediaan->kamarTersedia}}</h1>
                        <div class="box-text">
                            <strong>Kamar Tersedia</strong>
                            <p >Jumlah kamar tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="buatRujukan row justify-content-end" id="buatRujukan">
                <div type="button"  class="col-10">
                    <a href="{{URL('/admin/rujuk')}}" class="btn btn-rujukan btn-info float-right" >
                        <span class="fa fa-plus"></span> Buat Rujukan</a>
                </div>
            </div>
        </div>
    </div>

<div style="border: 1px solid #636161;opacity:1;"></div>
<div class="container">
    <div class="justify-content">
        <h1 style="padding: 50px 0 20px;">Spesialis Tersedia</h1>
        <p>Seluruh spesialis tersedia di <span>{{$post->namaPublik}}</span>. Hubungi fasilitas kesehatan untuk informasi lengkap.</p>
    </div>
</div>
    <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
            @foreach ($post->getSpesialis as $p)
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ URL::asset('assets/images/dokter2.png') }}" alt="">
                    </div>
                    <div class="name"><span class="name"><strong>{{$p->namaSpesialis}}</strong></span></div>
                    <div class="kemampuan"><span class="kemampuan">{{$p->kemampuanSpesialis}}</span></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>

<div style="margin-top:50px;border: 0.2px solid #636161; opacity:0.2;"></div>
    <div class="screen-info" id="screen-info">
        <div class="container-xl">
            <div class="text-center justify-content-lg-center">
                <h1>Informasi <span>Rumah Sakit Umum Dr. Zainoel Abidin</span></h1>
                <p style="margin-top:20px; max-width: 900px; margin: auto; "><span>Rumah Sakit Umum Dr. Zainoel Abidin mempunyai tugas memberikan pelayanan kesehatan perorangan secara paripurna</span></p>
            </div>
            <div class="subinfo-kiri">
                <blockquote style="margin-top:50px">
                    <p style="margin-top:100px; border-bottom:1px solid #111;"><strong>Alamat</strong></p>
                    <p id="" href="">{{$post->alamatPublik}}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Tingkat Fasilitas Kesehatan</strong></p>
                    <p id="" href="">{{$post->tingkatFaskes}}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Kontak</strong></p>
                    <p id="" href="">Email: <span>{{$post->emailPublik}}</span> <br>Telepon: <span>{{$post->teleponPublik}}</span> </p>
                </blockquote>

            </div>
            <div class="subinfo-kanan ">
                <img src="{{ URL::asset('storage/'.$post->faskesPicture) }}"  alt="gambarRumahSakit">
            </div>
        </div>
    </div>
</div>
@endsection
