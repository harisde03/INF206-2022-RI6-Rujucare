@extends('base')

{{-- http://127.0.0.1:8000/faskes --}}
{{-- Author : Muny Safitri --}}

@section('title', 'namaFaskes')

@section('navbar')
    <li class="nav-item" style="padding-left:20px;"> <a href="#main-screen" class="nav-link">Statistik</a></li>
    <li class="nav-item" style="padding-left:20px;"> <a href="#info-spesialis" class="nav-link">Informasi
            Spesialis</a></li>
    <li class="nav-item" style="padding-left:20px;"> <a href="#screen-info" class="nav-link">Informasi Faskes</a>
    </li>
@endsection

@section('content')
    {{-- Working area --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .main-screen {
            /* background-image: url('{{ asset('assets/images/contohRumahSakit.png') }}'); */
            background-image: url('{{ URL::asset('storage/' . $post->faskesPicture) }}');
        }
    </style>

    <div style="border: 0.5px solid #636161;opacity:0.2;"></div>
    <div class="main-screen align-items-center" style="" id="main-screen">
        <div class="container vw-100" style="width:auto">
            <h1 class="faskes" id="">{{ $post->namaPublik }}</h1>
            <div id="boxes">
                <ul class="flex-list flex-wrap ">
                    <li class="box">
                        <h1 id="">{{ $post->ketersediaan->rujukanTersedia }}</h1>
                        <div class="box-text">
                            <strong>Rujukan Tersedia</strong>
                            <p>Jumlah rujukan tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                    <li class="box">
                        <h1 id="">{{ $post->ketersediaan->kamarTersedia }}</h1>
                        <div class="box-text">
                            <strong>Kamar Tersedia</strong>
                            <p>Jumlah kamar tersedia untuk pasien fasilitas kesehatan</p>
                        </div>
                    </li>
                </ul>
            </div>

            @auth
                @if ($post->id_kredensial != Auth::user()->id_faskes)
                    <div class="buatRujukan row justify-content-end" id="buatRujukan">
                        <div type="button" class="col-10">
                            <a href="{{ URL('/admin/rujuk/' . $post->urlFaskes) }}"
                                class="btn btn-rujukan btn-info float-right">
                                <span class="fa fa-plus"></span> Buat Rujukan</a>
                        </div>
                    </div>
                @endif
            @endauth

        </div>
    </div>

    <div style="border: 1px solid #636161;opacity:1;"></div>
    <div class="container" id="info-spesialis">
        <div class="justify-content">
            <h1 style="padding: 50px 0 20px;">Spesialis Tersedia</h1>
            <p>Seluruh spesialis tersedia di <span>{{ $post->namaPublik }}</span>. Hubungi fasilitas kesehatan untuk
                informasi lengkap.</p>
        </div>
    </div>
    <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
            @foreach ($post->spesialis as $sp)
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            {{-- <img src="{{ URL::asset("storage/" . 'assets/images/dokter2.png') }}" alt=""> --}}
                            <img src="{{ URL::asset('storage/' . $sp->profilePicture) }}"
                                alt="{{ $sp->namaSpesialis }}" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="name"><span
                                class="name"><strong>{{ $sp->namaSpesialis }}</strong></span></div>
                        <div class="kemampuan"><span class="kemampuan">{{ $sp->kemampuanSpesialis }}</span>
                        </div>
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
                <h1>Informasi <span>{{ $post->namaPublik }}</span></h1>
                <p style="margin-top:20px; max-width: 900px; margin: auto; "><span>{{ $post->namaPublik }}
                        merupakan {{ $post->deskripsiPublik }}</span></p>
            </div>
            <div class="subinfo-kiri">
                <blockquote style="margin-top:50px">
                    <p style="margin-top:100px; border-bottom:1px solid #111;"><strong>Alamat</strong></p>
                    <p id="" href="">{{ $post->alamatPublik }}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Tingkat Fasilitas Kesehatan</strong>
                    </p>
                    <p id="" href="">{{ $post->tingkatPublik }}</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Kontak</strong></p>
                    <p id="" href="">Email: <span>{{ $post->emailPublik }}</span> <br>Telepon:
                        <span>{{ $post->teleponPublik }}</span>
                    </p>
                </blockquote>

            </div>
            <div class="subinfo-kanan ">
                {{-- <img src="{{ URL::asset("storage/" . 'assets/images/contohRumahSakit.png') }}" alt="gambarRumahSakit"> --}}
                <img src="{{ URL::asset('storage/' . $post->faskesPicture) }}" alt="{{ $post->namaPublik }}"
                    style="object-fit: cover;">
            </div>
        </div>
    </div>
    </div>
@endsection
