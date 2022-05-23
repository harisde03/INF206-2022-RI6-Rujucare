@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-ketersediaan --}}

@section('title', 'Informasi Ketersediaan')

@section('content')
    {{-- Working area --}}
    {{-- Author : Muny Safitri --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .sub-img{
            border-radius: 80%;
            width: 200px;
            height:200px;
        }
    input[type=text],
    textarea {
        width: 95%;
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type="submit"] {
        width: 18%;
    }
    input[type="file"] {
        width: 18%;
        border-radius: 0%;

    }

    .drop-zone {
        border-radius: 50%;
        max-width: 75%;
        height: 200px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        color: #cccccc;
        border: 2px solid;
    }

    .drop-zone--over {
        border-style: solid;
    }

    .drop-zone__input {
        display: none;
    }

    .drop-zone__thumb {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
    }

    .drop-zone__thumb::after {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }
</style>



    <div class="container-xl mb-5">
        <div class="col">
            <div class="row my-4">
                <div class="d-flex" style="width: 280px;">
                    <img class="rounded-circle" src="{{ URL::asset('assets\images\contohRumahSakit.png') }}"
                        alt="foto-profil" style="height: 64px; width: 64px;">
                    <div class="align-self-center ps-3 text-teal text-nowrap">
                        <h5 class="mb-0">Rumah Sakit Umum Dr. Zainoel Abidin</h5>
                        <h5 class="mb-0 fw-normal">Informasi Umum</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-2 d-flex flex-column flex-shrink-0" style="width: 280px;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link active" aria-current="page">
                                Informasi Ketersediaan
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL('/admin/informasi-profil') }}" class="nav-link link-dark">
                                Informasi Profil Umum
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ URL('/admin/pesan-masuk') }}" class="nav-link link-dark">
                                Pesan Masuk
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL('/admin/pesan-keluar') }}" class="nav-link link-dark">
                                Pesan Keluar
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ URL('/faskes') }}" class="nav-link link-dark">
                                Simpan dan Keluar
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-8">
                    <h2>Informasi Ketersediaan</h2>
                    <hr>
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <h3><label for="rujukanTersedia">Jumlah Rujukan Tersedia</label></h3>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="rujukanTersedia" name="rujukanTersedia"
                                        value="1" type="number" required>
                                </div>
                                <p>Jumlah rujukan akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div class="col-8">
                                <h3><label for="kamarTersedia"></label>Jumlah Kamar Tersedia</h3>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="kamarTersedia" name="kamarTersedia"
                                        value="1" type="number" required>
                                </div>
                                <p>Jumlah kamar akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div></div>
                        </div>

                        <div class="col">
                            <button class="btn btn-info">Lakukan Perubahan</button></div>
                        <br>

                        <div class="row">
                            <div class="col-8">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="namaSpesialis">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="namaSpesialis" name="namaSpesialis" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="kemampuanSpesialis"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="kemampuanSpesialis" name="kemampuanSpesialis" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="drop-zone offset-md-2 rounded-circle">
                                        <span class="drop-zone__prompt  col-10">

                                            <i class="fas fa-user-md" style="font-size:50px"></i>
                                            </span>
                                            <input type="file" class="drop-zone__input" name="profilPicture">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col">
                            <button class="btn btn-info">Lakukan Perubahan</button>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-8">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="namaSpesialis2">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="namaSpesialis2" name="namaSpesialis2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="kemampuanSpesialis2"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="kemampuanSpesialis2" name="kemampuanSpesialis2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="drop-zone offset-md-2 rounded-circle">
                                        <span class="drop-zone__prompt  col-10">

                                            <i class="fas fa-user-md" style="font-size:50px"></i>
                                            </span>
                                            <input type="file" class="drop-zone__input" name="profilPicture2">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col">
                            <button class="btn btn-sm btn-info">Lakukan Perubahan</button>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-8">
                                <div class="box-ketersediaan col-auto">
                                    <h3><label for="namaSpesialis3">Nama Spesialis</label></h3>
                                    <div class="input">
                                        <input class=" col-sm-12 form-control" id="namaSpesialis3" name="namaSpesialis3" value=""
                                            type="text" required>
                                    </div>
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu pencarian</p>
                                </div>
                                <div class="box-ketersediaan col-auto ">
                                    <h3><label for="group-4"></label>Kemampuan Spesialis</h3>
                                    <div class="input">
                                        <input class="col-sm-12 form-control" id="group-2" name="group-2" value=""
                                            type="text" required>
                                    </div>
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="drop-zone offset-md-2 rounded-circle">
                                        <span class="drop-zone__prompt  col-10">

                                            <i class="fas fa-user-md" style="font-size:50px"></i>
                                        </span>
                                        <input type="file" class="drop-zone__input" name="profilPicture3">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <button class="btn btn-info">Lakukan Perubahan</button>
                            </div>
                            <div>
                                <button class="btn btn-info">Tambah Spesialis</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
            const dropZoneElement = inputElement.closest(".drop-zone");

            dropZoneElement.addEventListener("click", (e) => {
                inputElement.click();
            });

            inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                    updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            });

            dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
            });

            ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();

                if (e.dataTransfer.files.length) {
                    inputElement.files = e.dataTransfer.files;
                    updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }

                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        /**
         * Updates the thumbnail on a drop zone element.
         *
         * @param {HTMLElement} dropZoneElement
         * @param {File} file
         */
        function updateThumbnail(dropZoneElement, file) {
            let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

            // First time - remove the prompt
            if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
            }

            // First time - there is no thumbnail element, so lets create it
            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
            }

            thumbnailElement.dataset.label = file.name;

            // Show thumbnail for image files
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
            } else {
                thumbnailElement.style.backgroundImage = null;
            }
        }
    </script>




@endsection
