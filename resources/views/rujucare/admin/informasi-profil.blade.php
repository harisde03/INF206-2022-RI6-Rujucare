@extends('base')

{{-- http://127.0.0.1:8000/admin/informasi-profil --}}
{{-- Author: Haris Daffa --}}

@section('title', 'Informasi Profil')

@section('content')
<style>
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
    {{-- @dd($post) --}}

    <div class="container-xl mb-5">
        <div class="col">
            @foreach ( $post as $p )
            <div class="row my-4">
                <div class="d-flex" style="width: 280px;">
                    <img class="rounded-circle" src="{{ URL::asset('assets\images\contohRumahSakit.png') }}"
                        alt="foto-profil" style="height: 64px; width: 64px;">
                    <div class=" align-self-center ps-3 text-teal text-nowrap">
                        <h5 class="mb-0 col-5">{{$p->namaFaskes}}</h5>
                        <h5 class="mb-0 fw-normal">Informasi Umum</h5>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="mt-2 d-flex flex-column flex-shrink-0" style="width: 280px;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link link-dark">
                                Informasi Ketersediaan
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL('/admin/informasi-profil') }}" class="nav-link active" aria-current="page">
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

                @foreach ( $post as $p )
                <div class="col-8">
                    <h2>Informasi Umum</h2>
                    <hr>
                    <form action="/admin/informasi-profil" method = "POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <input type="hidden" name="faskes_id" value="{{$p->id}}">
                                <div class="mt-2">
                                    <h4>Nama Fasilitas Kesehatan</h4>
                                    <input name="namaPublik" type="text" class="form-control my-2 @error('namaPublik') is-invalid @enderror" placeholder="Nama Fasilitas Kesehatan" value="{{$p->namaFaskes}}">
                                    <p>Nama fasilitas akan ditampilkan pada halaman utama rumah sakit dan akan ditampilkan
                                        pada menu
                                        pencarian.</p>
                                    @error('namaPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Email Publik</h4>
                                    <input name="emailPublik" type="text" class="form-control my-2  @error('emailPublik') is-invalid @enderror" placeholder="Email Publik"value="{{$p->email}}">
                                    <p>Email akan ditampilkan sebagai tempat menghubungi fasilitas kesehatan.</p>
                                    @error('emailPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Telepon Publik</h4>
                                    <input name="teleponPublik" type="text" class="form-control my-2 @error('teleponPublik') is-invalid @enderror" placeholder="Telepon Publik">
                                    <p>Nomor Telepon merupakan nomor yang dapat dihubungi untuk keadaan emergensi.</p>
                                    @error('teleponPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Deskripsi Fasilitas Kesehatan</h4>
                                    <textarea name="deskripsiPublik" class="form-control my-2 @error('deskripsiPublik') is-invalid @enderror" rows="5" placeholder="Deskripsi Fasilitas Kesehatan"></textarea>
                                    <p>Deskripsi hanya menampilkan informasi umum terkait fasilitas kesehatan.</p>
                                    @error('deskripsiPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Alamat Fasilitas Kesehatan</h4>
                                    <textarea name="alamatPublik" class="form-control my-2  @error('alamatPublik') is-invalid @enderror" rows="5" placeholder="Alamat Fasilitas Kesehatan"></textarea>
                                    <p>Alamat fasilitas lengkap.</p>
                                    @error('alamatPublik')
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <h4>Tingkat Fasilitas Kesehatan</h4>
                                    <select name="tingkatFaskes" class="form-select">
                                        <option>Pilih Tingkat Fasilitas Kesehatan</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>Lainnya</option>
                                    </select>
                                    <p>Perubahan tingkat fasilitas kesehatan membutuhkan konfirmasi.</p>
                                </div>
                                <button href="#" class="btn btn-teal">Lakukan Perubahan</button>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4>Foto Profil</h4>
                                    <div class="drop-zone offset-md-2 rounded-circle">
                                        <span class="drop-zone__prompt  col-10">
                                            <i class="fas fa-hospital-alt" style="font-size:50px"></i>
                                            {{-- <img class="rounded-circle"
                                                src="{{ URL::asset('assets\images\contohRumahSakit.png') }}" alt="foto-profil"
                                                style="height: 200px; width: 200px;">
                                                 @error('suratPernyataan')
                                                         {{$message}}
                                                 @enderror --}}
                                            </span>
                                            <input type="file" class="drop-zone__input" name="faskesPicture">
                                    </div>
                                    <p>Foto Profil akan ditampilkan sebagai foto utama Fasilitas Kesehatan. Gunakan foto
                                        resolusi
                                        tinggi.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
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
