@extends('base')

{{-- http://127.0.0.1:8000/admin/rujuk --}}
{{-- Author: Ahmad Chairiansyah --}}

@section('title', 'Rujuk')

@section('content')
{{-- Working area --}}
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
        max-width: 200px;
        height: 200px;
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

<br> <br>
<p style="font-size: 45px; text-align: center">Pengajuan Surat Rujukan</p>
<br> <br>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="nbpjs">
                    <h5>Nomor BPJS</h5>
                </label> <br>
                <input type="text" id="nbpjs">
                <p>Nomor BPJS memiliki data informasi pasien secara lengkap. Pastikan tidak salah dalam penginputan data.</p>
                <label for=" dkpasien">
                    <h5>Deskripsi Kebutuhan Pasien</h5>
                </label> <br>
                <textarea id="dkpasien" style="height:200px"></textarea>
                <p>Deskripsikan secara rinci kebutuhan yang dibutuhkan oleh pasien.</p>
                <label for="frujukan">
                    <h5>Upload Surat Rujukan -></h5>
                </label> <br> <br>
                <input type="submit" class="btn btn-success" value="Ajukan">
            </div>
            <div class="col">
                <div class="drop-zone offset-md-2">
                    <span class="drop-zone__prompt mb-2 col-10">
                        <img src="{{ URL::asset('assets/images/drop-file.png') }}" alt="Drop File Here"
                                    class="p-5 " style="height: 350px">
                         Drop file here or click to upload</span>
                    <input type="file" name="myFile" class="drop-zone__input">
                </div>
            </div>
        </div>
    </form>
</div>
<br> <br>
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
