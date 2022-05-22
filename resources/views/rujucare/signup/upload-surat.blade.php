@extends('base')

{{-- http://127.0.0.1:8000/signup/upload-surat --}}

@section('title', 'Upload Surat')

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

    .drop-zone {
        max-width: 75%;
        height: 400px;
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

<section class="vh-90">
    {{-- @dd(request()->all()); --}}
        <div class="d-flex align-items-center h-100">
            <div class="container-xl">
                <h1 class="d-flex justify-content-center">Upload Surat Pernyataan Persetujuan</h1>
                <br><br>
                <form action="/signup/upload-surat" method="post" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" class="border-0;" name="email" value={{request('email')}}>
                    <input type="hidden" class="border-0;" name="namaFaskes" value={{request('namaFaskes')}}>
                    <input type="hidden" class="border-0;" name="tingkatFaskes" value={{request('tingkatFaskes')}}>
                    <input type="hidden" class="border-0;" name="password" value={{request('password')}}>

                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center  @error('suratPernyataan') is-invalid @enderror">

                                <div class="col ">
                                    <div class="drop-zone offset-md-2 ">
                                        <span class="drop-zone__prompt mb-2 col-10">
                                            <img src="{{ URL::asset('assets/images/drop-file.png') }}" alt="Drop File Here"
                                                        class="p-5 " style="height: 350px">

                                            </span>
                                        <input type="file" class="drop-zone__input" name="suratPernyataan">
                                    </div>
                                </div>
                        </div>
                                        @error('suratPernyataan')
                                                <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror

                        <div class="col">
                            <div class="">
                                <h4>Surat Pernyataan</h4>
                                <p>Kami telah mengirimkan sebuah email yang berisi template surat persetujuan. Jika tidak
                                    email tidak masuk, lakukan <a href="" class="text-teal text-decoration-none">resend</a>.
                                </p>
                            </div>
                            <div class="">
                                <button href="/login/login" type="submit"  class="btn btn-teal">Ajukan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {{-- @dd(request()) --}}
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
    </section>
@endsection
