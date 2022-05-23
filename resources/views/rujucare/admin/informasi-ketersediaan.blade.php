@extends('base')


{{-- http://127.0.0.1:8000/admin/informasi-ketersediaan --}}

@section('title', 'Informasi Ketersediaan')

@section('content')
    <style>
        .sub-img {
            border-radius: 80%;
            width: 200px;
        }

        input[type=text],
        textarea {
            width: 100%;
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
            font-family: "Quicksand", sans-serif;
            font-weight: 500;
            font-size: 20px;
            cursor: pointer;
            color: #cccccc;
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
            color: #ffffff;
            background: rgba(0, 0, 0, 0.75);
            font-size: 14px;
            text-align: center;
        }

    </style>
    <section class="container-xl mb-4 min-vh-90">
        <div class="col">
            <div class="row my-4">
                <div class="d-flex">

                    @if ($post->kredensial->faskesPicture != null)
                        <img class="rounded-circle" src="{{ URL::asset('storage/' . $post->kredensial->faskesPicture) }}"
                            alt="{{ $post->kredensial->namaPublik }}"
                            style="height: 64px; width: 64px; object-fit: cover;">
                    @else
                        <div class="text-teal border rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 64px; width: 64px;">
                            <i class="fas fa-hospital-alt" style="font-size:28px"></i>
                        </div>
                    @endif

                    <div class="align-self-center ps-3 text-teal text-nowrap">
                        <h5 class="mb-0">{{ $post->kredensial->namaPublik }}</h5>
                        <h5 class="mb-0 fw-normal">Informasi Umum</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 mb-4">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link active"
                                aria-current="page">
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
                            <a href="{{ URL('/faskes/' . $post->kredensial->urlFaskes) }}" class="nav-link link-dark">
                                Simpan dan Keluar
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <h2>Informasi Ketersediaan</h2>
                    <hr>
                    <form method="POST" action="{{ route('informasi-ketersediaan.updateKetersediaan') }}">
                        <div class="row">
                            @csrf
                            <div class="col-12 col-lg-8">
                                <h3><label for="rujukanTersedia">Jumlah Rujukan Tersedia</label></h3>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="rujukanTersedia"
                                        name="rujukanTersedia"
                                        value="{{ $post->kredensial->ketersediaan->rujukanTersedia }}" type="number"
                                        required>
                                </div>
                                <p>Jumlah rujukan akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                            <div class="col-12 col-lg-8">
                                <h3><label for="kamarTersedia"></label>Jumlah Kamar Tersedia</h3>
                                <div class="number-input">
                                    <input class="quantity col-sm-12 form-control" min="0" id="kamarTersedia"
                                        name="kamarTersedia" value="{{ $post->kredensial->ketersediaan->kamarTersedia }}"
                                        type="number" required>
                                </div>
                                <p>Jumlah kamar akan menjadi tujuan utama bagi staff rumah sakit untuk membuat rujukan</p>
                            </div>
                        </div>

                        <div class="col">
                            <button class="btn btn-teal mb-4">Lakukan Perubahan</button>
                        </div>
                    </form>

                    @foreach ($post->kredensial->spesialis as $spesialis)
                        <form method="POST" action="{{ route('informasi-ketersediaan.updateSpesialis') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 order-last col-lg-8 order-lg-first">
                                    <input type="hidden" name="id_spesialis" value="{{ $spesialis->id_spesialis }}">
                                    <div class="box-ketersediaan col-auto">
                                        <h3><label for="namaSpesialis">Nama Spesialis</label></h3>
                                        <div class="input">
                                            <input class=" col-sm-12 form-control" id="namaSpesialis" name="namaSpesialis"
                                                value="{{ $spesialis->namaSpesialis }}" type="text" required>
                                        </div>
                                        <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan
                                            ditampilkan
                                            pada menu pencarian</p>
                                    </div>
                                    <div class="box-ketersediaan col-auto">
                                        <h3><label for="kemampuanSpesialis"></label>Kemampuan Spesialis</h3>
                                        <div class="input">
                                            <input class="col-sm-12 form-control" id="kemampuanSpesialis"
                                                name="kemampuanSpesialis" value="{{ $spesialis->kemampuanSpesialis }}"
                                                type="text" required>
                                        </div>
                                        <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="me-2">
                                            <button class="btn btn-teal" type="submit">Lakukan Perubahan</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-danger" formaction="{{ route('informasi-ketersediaan.deleteSpesialis') }}">Hapus Spesialis</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 order-first col-lg-4 order-lg-last mb-4">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <div class="rounded-circle border d-flex justify-content-center align-items-center drop-zone"
                                                style="width: 200px; height: 200px;">

                                                @if ($spesialis->profilePicture != null)
                                                    <img class="rounded-circle" src="{{ URL::asset("storage/" . $spesialis->profilePicture) }}"
                                                        alt="{{ $spesialis->namaSpesialis }}"
                                                        style="height: 200px; width: 200px; object-fit: cover; position: absolute;">
                                                @endif

                                                <span class="drop-zone__prompt">
                                                    <i class="fas fa-user-md" style="font-size:50px"></i>
                                                </span>
                                                <input type="file" class="drop-zone__input" name="profilePicture">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    @endforeach

                    <div id="new_spesialis">
                        <form method="POST" action="{{ route('informasi-ketersediaan.storeSpesialis') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 order-last col-lg-8 order-lg-first">
                                    <div class="box-ketersediaan col-auto">
                                        <h3><label for="namaSpesialis">Nama Spesialis Baru</label></h3>
                                        <div class="input">
                                            <input class=" col-sm-12 form-control" id="namaSpesialis" name="namaSpesialis"
                                                value="" type="text" required>
                                        </div>
                                        <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan
                                            ditampilkan
                                            pada menu pencarian</p>
                                    </div>
                                    <div class="box-ketersediaan col-auto">
                                        <h3><label for="kemampuanSpesialis"></label>Kemampuan Spesialis Baru</h3>
                                        <div class="input">
                                            <input class="col-sm-12 form-control" id="kemampuanSpesialis"
                                                name="kemampuanSpesialis" value="" type="text" required>
                                        </div>
                                        <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan</p>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="me-2">
                                            <button class="btn btn-teal" type="submit">Lakukan Perubahan</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-danger" onclick="removeSpesialis()">Hapus
                                                Spesialis</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 order-first col-lg-4 order-lg-last mb-4">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="d-flex justify-content-center h-100 w-100">
                                            <div class="rounded-circle border d-flex justify-content-center align-items-center drop-zone"
                                                style="width: 200px; height: 200px;">
                                                <span class="drop-zone__prompt">
                                                    <i class="fas fa-user-md" style="font-size:50px"></i>
                                                </span>
                                                <input type="file" class="drop-zone__input" name="profilePicture">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ URL::asset('assets/scripts/spesialis.js') }}"></script>
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
