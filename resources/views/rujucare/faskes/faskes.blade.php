@extends('base')

{{-- http://127.0.0.1:8000/faskes --}}
{{-- Author : Muny Safitri --}}

@section('title', 'Nama_Faskes')

@section('navbar')
    <li class="nav-item" style="padding-left:20px;"> <a href="" class="nav-link">Statistik</a></li>
    <li class="nav-item"  style="padding-left:20px;"> <a href="" class="nav-link">Informasi Spesialis</a></li>
    <li class="nav-item"  style="padding-left:20px;"> <a href="" class="nav-link">Informasi Faskes</a></li>
@endsection

<link rel="stylesheet" href="style.css">

@section('content')
    {{-- Working area --}}  
    <div style="border: 0.5px solid #636161;opacity:0.2;"></div> 
    
    <div class ="main-screen" style="background-image: url(assets/images/contohRumahSakit.png)" id="main-screen"></div>
        <div class ="container-xl">
            <div class= "header">
                <h1 id = "">Rumah Sakit Umum Dr. Zainoel Abidin</h1>
            </div>

            <div class="boxes" id="boxes">
                <ul class="flex-list flex-wrap ">
                    <li class="box">
                        <h1 id="">10</h1>
                        <div class="box-text">
                            <strong>Rujukan Tersedia</strong>  
                            <p >Jumlah rujukan tersedia untuk pasien fasilitas kesehatan</p>   
                        </div> 
                    </li> 
                    <li class="box" >
                        <h1 id="">40</h1>
                        <div class="box-text">
                            <strong>Kamar Tersedia</strong>  
                            <p >Jumlah kamar tersedia untuk pasien fasilitas kesehatan</p>   
                        </div>
                    </li>
                </ul>
                <div class="buatRujukan col-lg-3 " id="buatRujukan">
                    <button type="button"  >
                        <a href="{{URL('/admin/rujuk')}}" class="btn btn-rujukan btn-info float-right" >
                            <span class="fa fa-plus"></span> Buat Rujukan</a>
                    </button>
                </div>
            </div>

            
        </div>
    
    
    <div style="border: 1px solid #636161;opacity:1;"></div>

    <div class="screen-spesial" id="screen-spesial">
        <div class="container-xl">
            <div class=" justify-content">
                <h1>Spesialis Tersedia</h1>
                <p>Seluruh Spesialis tersedia di <span>Rumah Sakit umum Dr. Zainoel Abidin</span>. Hubungi Fasilitas kesehatan untuk informasi lengkap</p>
            </div>

            
            <div class="boxes col-12 ">       
                <ul class="flex-list d-flex flex-wrap ">
                    <li class="box ">
                        <div class="box-img col-12 align-center" id ="frame-image" style="background-size:cover;">
                            <img src="{{ URL::asset('assets/images/dokter1.png') }}" alt="">
                        </div>
                        <div class="box-text col-12">
                            <strong id="" name="" >Prof. Dr. Nadia Rimawati M,Si.</strong>
                            <p>Spesialis Gigi</p>
                        </div>
                    </li>
                    <li class="box ">
                        <div class="box-img center col-12" id ="frame-image"  style="background-size:cover; margin:auto">
                            <img src="{{ URL::asset('assets/images/dokter2.png') }}" alt="" >
                        </div>
                        <div class="box-text col-12">
                            <strong id="" name="" >Dr. Muny Safitri</strong>
                            <p>Spesialis Anak</p>
                        </div>   
                    </li>
                    <li class="box ">
                        <div class="box-img center col-12" id ="frame-image"style="background-image: url(assets/images/dokter3.png);background-size:cover;"></div>
                        <div class="box-text col-12">
                            <strong id="" name="" >Prof. Dr. Maghfirah ZA</strong>
                            <p>Spesialis Kulit</p>
                        </div> 
                    </li>  
                </ul>
            
            </div>
        </div>
    </div>

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
                    <p id="" href="">Jl. Tgk. Daud Beurereh No. 108 Banda Aceh</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Tingkat Fasilitas Kesehatan</strong></p>
                    <p id="" href="">Rumah Sakit Umum Tingkat 2</p>
                    <p style="margin-top:50px;border-bottom:1px solid #111;"><strong>Kontak</strong></p>
                    <p id="" href="">Email: <span>@acehprov.go.id</span> <br>Telepon: <span>0551-34565</span> </p>
                </blockquote>
                
            </div>
            <div class="subinfo-kanan ">
                <img src="{{ URL::asset('assets/images/contohRumahSakit.png') }}"  alt="gambarRumahSakit">
            </div>
        </div>
    </div>
</div>
    
   
@endsection
