@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-ketersediaan --}}

@section('title', 'Informasi Ketersediaan')

@section('content')
    {{-- Working area --}}
    {{-- Author : Muny Safitri --}}
    <style>
        *{
            font-family: 'Montserrat';
        }
        a{
            text-decoration:none;
        }
        a:hover{
            
            color:#000;
        }
        .font-black{
            color:#000;
        }
        .faskes-logo{
            color: #00ADB5;font-size: 18px;font-weight: 700; line-height: 22px;
        }
        .btn{
            opacity:0.7;
            width: :350px;
            height:38px;
            color:#000;
            

            
        }
        .btn-pick:hover {
            font-weight:600;
            font-style: normal;
            opacity: 1;
            background-color: #e5e5e5;
            color:#000;
            border-radius: 10px;
            width: :auto;
            
            
        }
        .btn:active {
            opacity: 0.7;
            color:#000;
        }
        .btn-info{
            opacity:0.8;
            color:#fff;
            text-align:center; 
            border-radius: 5px;
        }
        .btn-info:hover {
            font-weight:400;
            font-style: normal;
            opacity: 1;
            color:#fff;
            width: :auto;
            
        }
        .btn-info:active {
            opacity: 0.9;
           
        }
        .nav{
            font-family: 'Montserrat'; font-size: 14px;font-weight: 600;line-height: 17px;
        }
        .pick{
            background:#00adb4;
            border-radius:5px;
            width:10px;
            height:38px;
            position: absolute;
            padding-left: 10px;
            padding-top:-10px;
        }
        .sidenav {
            position: absolute;
            height: 1817px;
            width: 420px;
            
            z-index: 1;
            
            left: 0px;
            background-color: #fff;
            overflow-x: hidden;
            padding-top: 20px;
        }
        .main{
            position: relative;
            left:400px;
            width:auto;
            background-color: #fff;
            
        }
        .header{
            margin-left:50px;
        }
        .sp{
            width:970px;
            height:350px;
        }
        .group{
            width: 550px;
            height:320px;

        }
        .group h2{
            padding-top:20px;
            font-weight:700px;
            font-size:24px;
            line-height: 36px;
        }
        .group p{
            font-weight: 400px;
            font-size:18px;
            line-height:22px;
            margin-top: 5px;
        }
        .box-ketersediaan{
            width:auto;
            height: 150px;
            position:relative;
        }
        .sp-img{
            position: relative;
            float: right;
            border-radius :50%;
            width:300px;
            height:300px;
            margin-bottom: :20px;
        }
        

        @media (max-width: 900px){

            .group{
            width: 400px;
            height:350px;
            padding-bottom: :20px;

        }
        .group h2{
            padding-top:20px;
            font-weight:700px;
            font-size:24px;
            line-height: 36px;
        }
        .group p{
            font-weight: 400px;
            font-size:18px;
            line-height:22px;
            margin-top: 5px;
        }
        .box-ketersediaan{
            width:auto;
            height: 160px;
            position:relative;
            padding-top:30px;
            padding-bottom:30px;
        } 
        .sp{
            width:370px;
            height:420px;
        }
        .sp-img{
            position: relative;
            width:100px;
            height:100px;
        }
        .sidenav {
                width:190px;
                height:1817px;
            }
            .btn-pick:hover {
            font-weight:600;
            font-style: normal;
            opacity: 1;
            background-color: #e5e5e5;
            color:#000;
            border-radius: 10px;
            width: :auto;
            height:120px;
            }
            .pick{
                background:#00adb4;
                border-radius:5px;
                width:5px;
                height:70px;
                position: absolute;
                padding-left: 10px;
                padding-bottom:10px;
            }
            .main{
                position: relative;
                left:190px;
                width:auto;
                background-color: #fff;
            }
            
            
        }
        @media (max-width: 600px){
            .main{
            position: relative;
            left:190px;
            width:auto;
            background-color: #fff;
            
        }
        }
            
        

    </style>

    <div class="container-fluid">
        <div class="row ">
            <div class="sidenav col-auto col-md-3 col-xl-4 px-sm-3 px-0 bg-white">
                <div class=" d-flex flex-column align-items-center align-items-sm-start ">

                    <a href="/" class="d-flex  text-decoration-none">
                        <span class="fs-4 d-none d-sm-inline" >
                            <img src="{{ URL::asset('assets/images/contohRumahSakit.png') }}" alt="faskes" width="80px" height="80px" style="border-radius :50%;">
                        </span>
                        <div class=" pb-5 col-xl-6 " class="padding-right:10px">
                            <div class="ms-4">
                                <h1 class="faskes-logo  d-none d-sm-inline " style=" ">Rumah Sakit Umum Dr. Zainoel Abidin</h1>
                            </div>
                            
                        </div>
                        
                    </a>

                
                    <ul class="fs-4 nav flex-column align-items-center align-items-sm-start " id="menu" >
                        <li class="nav-item "style="padding-top:20px;">
                            {{-- pakai java script --}}
                            <div class="ms-3 pick"></div> 
                            <button class="ms-5 btn btn-pick  " >
                                <a href="#" class="font-black ms-5 ">
                                   
                                    Informasi Ketersediaan
                                </a>
                            </button>   
                        </li>
                        
                        <li class="nav-item "style="padding-top:20px;">
                            <div class="ms-3 pick"></div>
                            <button class="ms-5 btn btn-pick  " >
                                <a href="#" class="font-black ms-5 ">
                                    Informasi Profil Fakultas Kesehatan
                                </a>
                            </button>   
                        </li>
                        <br>
                        <hr>
                    </ul>
                        
                    
                    <div class="fs-4 ms-4 col-12" style=" border: 1px solid #C4C4C4;position: relative"></div>
                    <br>
                    <ul class="fs-4 nav flex-column align-items-center align-items-sm-start " id="menu" >
                        <li class="nav-item "style="padding-top:20px;">
                            {{-- pakai java script --}}
                            <div class="ms-3 pick"></div> 
                            <button class="ms-5 btn btn-pick  " >
                                <a href="#" class="font-black ms-5 ">
                                   Pesan Masuk
                                </a>
                            </button>   
                        </li>
                        
                        <li class="nav-item "style="padding-top:20px;">
                            <div class="ms-3 pick"></div>
                            <button class="ms-5 btn btn-pick  " >
                                <a href="#" class="font-black ms-5 ">
                                    Pesan Keluar
                                </a>
                            </button>   
                        </li>
                    <br>
                    <hr>
                    </ul>

                    
                    <div class="fs-4 ms-4 col-12" style=" border: 1px solid #C4C4C4;position: relative"></div>
                
                    
                    <ul class="fs-4 nav flex-column align-items-center align-items-sm-start " id="menu" >
                        <li class="nav-item "style="padding-top:20px;">
                            {{-- pakai java script --}}
                            <div class="ms-3 pick"></div> 
                            <button class="ms-5 btn btn-pick  " >
                                <a href="#" class="font-black ms-5 ">
                                   Simpan dan Keluar
                                </a>
                            </button>   
                        </li>
                    </ul>
                    {{-- <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            
        </div>
        <div class="main col py-3 col-auto col-md-3 col-xl-4 px-sm-6 px-0 bg-white">
           <div class="header col-auto col-md-3 col-xl-4 px-sm-3 px-0">
               <ul>
                   <li>
                        <h1>Informasi Ketersediaan</h1>
                        <div class="group">
                            <div class="box-ketersediaan">
                                <h2><label for="group-1">Jumlah Rujukan Tersedia</label></h2>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="group-1" name="group-1"   value="1" type="number" required>
                                </div>
                                <p>Jumlah rujukan akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div class="box-ketersediaan">
                                <h2><label for="group-2"></label>Jumlah Kamar Tersedia</h2>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="group-2" name="group-2"   value="1" type="number" required>
                                </div>
                                <p>Jumlah kamar akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div></div>
                        </div>
                        <button class="btn-sm btn-info col-5">Lakukan Perubahan</button>
                        
                    </li>
                    <li>
                        <div class="sp">
                            {{-- belum tau cara input gambar model bulat kek tu --}}
                            <form action="" method="post" enctype="multipart/form-data">
                                
                                {{-- <input class="align-bottom "  type='file' name='foto' accept='image/*' value="{{ URL::asset('assets/images/dokter1.png') }}" disabled style="float:right;position: absolute;" /> --}}
                                <img class="sp-img" src="{{ URL::asset('assets/images/dokter1.png') }}" alt="" style="align-self: end">    
                            </form>
                            
                            <div class="group">
                                <div class="box-ketersediaan">
                                    <h2><label for="group-3">Nama Spesialis</label></h2>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control"  id="group-1" name="group-3"   value="" type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan">
                                    <h2><label for="group-4"></label>Kemampuan Spesialis</h2>
                                    <div class="input">
                                        <input class="col-sm-12 form-control"  id="group-2" name="group-2"   value="" type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            
                            <button class="btn-sm btn-info col-5 ">Lakukan Perubahan</button>
                        </div>
                    </li>
                    <li>
                        <div class="sp">
                            <form action="" method="post" enctype="multipart/form-data">
                                
                                {{-- <input class="align-bottom "  type='file' name='foto' accept='image/*' value="{{ URL::asset('assets/images/dokter1.png') }}" disabled style="float:right;position: absolute;" /> --}}
                                <img class="sp-img" src="{{ URL::asset('assets/images/dokter2.png') }}" alt="" style="align-self: end">    
                            </form>
                            <div class="group">
                                <div class="box-ketersediaan">
                                    <h2><label for="group-3">Nama Spesialis</label></h2>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control"  id="group-3" name="group-3"   value="" type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan">
                                    <h2><label for="group-4"></label>Kemampuan Spesialis</h2>
                                    <div class="input">
                                        <input class="col-sm-12 form-control"  id="group-2" name="group-2"   value="" type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <button class="btn-sm btn-info col-5">Lakukan Perubahan</button>
                        </div>  
                    </li>
                    <li>
                        <div class="sp">
                            <form action="" method="post" enctype="multipart/form-data">
                               
                                {{-- <input class="align-bottom "  type='file' name='foto' accept='image/*' value="{{ URL::asset('assets/images/dokter1.png') }}" disabled style="float:right;position: absolute;" /> --}}
                                <img class="sp-img" src="{{ URL::asset('assets/images/dokter3.png') }}" alt="" style="align-self: end">    
                            </form>
                            <div class="group">
                                <div class="box-ketersediaan">
                                    <h2><label for="group-3">Nama Spesialis</label></h2>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control"  id="group-1" name="group-3"   value="" type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan">
                                    <h2><label for="group-4"></label>Kemampuan Spesialis</h2>
                                    <div class="input">
                                        <input class="col-sm-12 form-control"  id="group-2" name="group-2"   value="" type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>  
                            </div>
                            <button class="btn-sm btn-info col-5 ">Lakukan Perubahan</button>  
                            <button class="btn-sm btn-info col-5 ">Tambah Spesialis</button>
                        </div>
                    </li>
                </ul>

               
           </div>
        </div>
    </div>
      
    


@endsection
