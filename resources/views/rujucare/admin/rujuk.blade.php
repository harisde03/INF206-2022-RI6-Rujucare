@extends('base')

{{-- http://127.0.0.1:8000/admin/rujuk --}}
{{-- Author: Ahmad Chairiansyah --}}

@section('title', 'Rujuk')

@section('content')
    {{-- Working area --}}
    <style>
        input[type="submit"] {
            width: 18%;
        }

        .drop-zone {
            max-width: 75%;
            height: 100%;
            padding: 25px;
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
            border-radius: 10px;
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
    <section class="container-xl mb-4 vh-90">
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <h1 class="d-flex justify-content-center">Pengajuan Surat Rujukan</h1>
                <p class="d-flex justify-content-center">Surat Pengajuan ke {{ $post->namaPublik }}</p>
                <br><br>
                <form method="POST" action="{{ route('rujuk.kirimRujukan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id_faskes_pengirim" value="{{ Auth::user()->id_faskes }}">
                            <input type="hidden" name="id_faskes_penerima" value="{{ $post->id_kredensial }}">
                            <div>
                                <h4>Nomor BPJS</h4>
                                <input name="nomorBpjs" type="text" class="form-control" placeholder="Nomor Kartu BPJS">
                                <p>Nomor BPJS memiliki data informasi pasien secara lengkap. Pastikan tidak salah dalam penginputan data.</p>
                            </div>
                            <div>
                                <h4>Deskripsi Kebutuhan Pasien</h4>
                                <textarea name="deskripsiPesanKeluar" class="form-control" rows="5"
                                    placeholder="Deskripsi Pengajuan Rujukan"></textarea>
                                <p>Deskripsikan secara rinci kebutuhan yang dibutuhkan oleh pasien.</p>
                            </div>
                            <div>
                                <h4>Upload Surat Rujukan <i class="fa fa-arrow-right" aria-hidden="true"></i></h4>
                            </div>
                        </div>
                        {{-- <form method="POST" action="" enctype="multipart/form-data"> --}}
                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-center border drop-zone"
                                style="height: 400px; width: 400px">
                                <img src="{{ URL::asset('assets/images/drop-file.png') }}" alt="Drop File Here"
                                    class="p-5" style="height: 350px; position: absolute">
                                <input type="file" name="gambarPesanKeluar" class="drop-zone__input">
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
                    <button class="btn btn-teal" type="submit">Ajukan</button>
                </form>
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
