@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-profil --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Informasi Profil')

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
                        <img class="rounded-circle" src="{{ URL::asset("storage/" . $post->kredensial->faskesPicture) }}"
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
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link link-dark"
                                aria-current="page">
                                Informasi Ketersediaan
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL('/admin/informasi-profil') }}" class="nav-link active">
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
                    @if (session()->has('update'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('update') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('insert'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('insert') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h2>Informasi Umum</h2>
                    <hr>
                    <form action="/admin/informasi-profil" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 order-last col-lg-8 order-lg-first">
                                <input type="hidden" name="id_faskes" value="{{ $post->id_faskes }}">
                                <div class="mt-2">
                                    <h4>Nama Fasilitas Kesehatan</h4>
                                    <input name="namaPublik" type="text"
                                        class="form-control my-2 @error('namaPublik') is-invalid @enderror"
                                        placeholder="Nama Fasilitas Kesehatan"
                                        value="{{ $post->kredensial->namaPublik }}">
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan
                                        ditampilkan
                                        pada menu
                                        pencarian.</p>
                                    @error('namaPublik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Email Publik</h4>
                                    <input name="emailPublik" type="text"
                                        class="form-control my-2  @error('emailPublik') is-invalid @enderror"
                                        placeholder="Email Publik" value="{{ $post->kredensial->emailPublik }}">
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan.</p>
                                    @error('emailPublik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Telepon Publik</h4>
                                    <input name="teleponPublik" type="text"
                                        class="form-control my-2 @error('teleponPublik') is-invalid @enderror"
                                        placeholder="Telepon Publik" value="{{ $post->kredensial->teleponPublik }}">
                                    <p>Nomor Telepon merupakan nomor yang dapat dihubungi untuk keadaan emergensi.</p>
                                    @error('teleponPublik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Deskripsi Fasilitas Kesehatan</h4>
                                    <textarea name="deskripsiPublik" class="form-control my-2 @error('deskripsiPublik') is-invalid @enderror" rows="5"
                                        placeholder="Deskripsi Fasilitas Kesehatan">{{ $post->kredensial->deskripsiPublik }}</textarea>
                                    <p>Deskripsi hanya menampilkan informasi umum terkait fasilitas kesehatan.</p>
                                    @error('deskripsiPublik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Alamat Fasilitas Kesehatan</h4>
                                    <textarea name="alamatPublik" class="form-control my-2  @error('alamatPublik') is-invalid @enderror" rows="5"
                                        placeholder="Alamat Fasilitas Kesehatan">{{ $post->kredensial->alamatPublik }}</textarea>
                                    <p>Alamat fasilitas lengkap.</p>
                                    @error('alamatPublik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Tingkat Fasilitas Kesehatan</h4>
                                    <select name="tingkatPublik" class="form-select">
                                        @if ($post->kredensial->tingkatPublik === 'Tingkat 1')
                                            <option selected="selected">Tingkat 1</option>
                                            <option>Tingkat 2</option>
                                            <option>Tingkat 3</option>
                                        @elseif ($post->kredensial->tingkatPublik === 'Tingkat 2')
                                            <option>Tingkat 1</option>
                                            <option selected="selected">Tingkat 2</option>
                                            <option>Tingkat 3</option>
                                        @elseif ($post->kredensial->tingkatPublik === 'Tingkat 3')
                                            <option>Tingkat 1</option>
                                            <option>Tingkat 2</option>
                                            <option selected="selected">Tingkat 3</option>
                                        @endif
                                    </select>
                                    <p>Perubahan tingkat fasilitas kesehatan membutuhkan konfirmasi.</p>
                                </div>
                                <button href="#" class="btn btn-teal">Lakukan Perubahan</button>
                            </div>
                            <div class="col-12 order-first col-lg-4 order-lg-last mb-4">

                                <div class="mt-2">
                                    <h4>Foto Profil</h4>
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <div class="rounded-circle border d-flex justify-content-center align-items-center drop-zone my-4"
                                                style="width: 200px; height: 200px;">

                                                @if ($post->kredensial->faskesPicture != null)
                                                    <img class="rounded-circle drop-zone__prompt"
                                                        src="{{ URL::asset("storage/" . $post->kredensial->faskesPicture) }}"
                                                        alt="{{ $post->kredensial->namaPublik }}"
                                                        style="height: 200px; width: 200px; object-fit: cover; position: absolute;">
                                                @else
                                                    <span class="drop-zone__prompt">
                                                        <i class="fas fa-hospital-alt" style="font-size:50px"></i>
                                                    </span>
                                                @endif

                                                <input type="file" class="drop-zone__input" name="faskesPicture">
                                            </div>
                                        </div>
                                    </form>
                                    <p>Foto Profil akan ditampilkan sebagai foto utama Fasilitas Kesehatan. Gunakan foto
                                        resolusi
                                        tinggi.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
