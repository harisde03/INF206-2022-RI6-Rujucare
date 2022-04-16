@extends('base')

{{-- http://127.0.0.1:8000/faskes --}}

@section('title', 'Nama_Faskes')

@section('navbar')

@endsection

@section('content')
    {{-- Working area --}}   
    <div class ="main-screen" style="background-image: url(assets/images/contohRumahSakit.png)">
        <div class ="container-xl">
            <div class= "header">
                <h1>Rumah Sakit Umum Dr. Zainoel Abidin</h1>
            </div>

            <div class="boxes" id="boxes">
                <div class="box">
                    <h1></h1>
                </div>
                <div class="box" >
                    <h1 id="" href="" ></h1>
                </div>
            </div>

            <div class="buatRujukan" id="buatRujukan">
                    <button type="button" class="btn btn-rujukan btn-lg ">
                        <span class="fa fa-plus"></span> Buat Rujukan
                    </button>
                </div>
        </div>
    <div class="screen-spesial">
        <div class="container-xl">
            <div class="header">
                <h1>Spesialis Tersedia</h1>
                <p>Seluruh Spesialis tersedia di <span>Rumah Sakit umum Dr. Zainoel Abidin</span>. Hubungi Fasilitas kesehatan untuk informasi lengkap</p>
            </div>

            <div class="boxes">       
                <ul class="flex-list">
                    <li class="box">
                        <div class="box-img" style="background-image: url(assets/images/dokter1.png);background-size:cover;"></div>
                        <div class="box-text">
                            <strong id="" name="" >Nama1 ahjahjshaksk ajgsujahijak</strong>
                            <p>Spesialis1 ajhsjsadsjh aghdkbajhgdyhgsja</p>
                        </div>
                    </li>
                    <li class="box">
                        <div class="box-img" style="background-image: url(assets/images/dokter2.png);background-size:cover;"></div>
                        <div class="box-text">
                            <strong id="" name="" >Nama2 ahjahjshaksk ajgsujahijak</strong>
                            <p>Spesialis2 ajhsjsadsjh aghdkbajhgdyhgsja</p>
                        </div>   
                    </li>
                    <li class="box">
                        <div class="box-img" style="background-image: url(assets/images/dokter3.png);background-size:cover;"></div>
                        <div class="box-text">
                            <strong id="" name="" >Nama3 ahjahjshaksk ajgsujahijak</strong>
                            <p>Spesialis3 ajhsjsadsjh aghdkbajhgdyhgsja</p>
                        </div> 
                    </li>
                      
                </ul>
            
            </div>


        </div>
    </div>


</div>
    
   
@endsection
