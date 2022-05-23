@extends('base')

{{-- http://127.0.0.1:8000/find/spesialis --}}
{{-- Author: Ahmad Chairiansyah --}}

@section('title', 'Pencarian Spesialis')

@section('content')
    {{-- Working area --}}
    <style>
        th,
        td {
            border: 1px solid;
            border-color: #AAD9D3;
            padding: 8px
        }

        tr:nth-child(odd) {
            background-color: #E8F6F5;
        }

        th {
            background-color: #00ADB4;
            text-align: left;
            color: white
        }

        table {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse
        }

        form.nosubmit {
            border: none;
            padding: 0;
        }

        input.nosubmit {
            width: 75%;
            Height: 55px;
            border: 1px solid #18A0FB;
            border-radius: 3px;
            display: block;
            padding: 9px 4px 9px 40px;
            background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat 13px center;
        }

        input.nosubmit[type="search"]::placeholder {
            color: #18A0FB;
            font-size: 20px;
        }

    </style>

    <br><br><br>
    <section class="container-xl min-vh-90">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form class="nosubmit position-relative" name="searchSpesialis" action="{{ route('cari.spesialis') }}">
                    @csrf
                    <div class="">
                        <input class="form-control nosubmit position-absolute top-50 start-50 translate-middle"
                            autocomplete="off" type="search" name="searchSpesialis" placeholder="Temukan Dokter Spesialis"
                            value="">
                        <input class="btn btn-info position-absolute" type="hidden">
                    </div>
                </form>
            </div>
        </div>

        <br><br><br>
        @if ($post->count())
            <table class="mb-3">
                <tr>
                    <th style="width: 37.75%">Nama Spesialis</th>
                    <th>Kemampuan Spesialis</th>
                    <th>Rujukan Tersedia</th>
                </tr>

                @foreach ($post as $p)
                    <tr>
                        <td>
                            <a href="/faskes/{{ $p->kredensial->urlFaskes }}" style="text-decoration: none">

                                {{ $p->namaSpesialis }}

                            </a>
                        </td>
                        <td>{{ $p->kemampuanSpesialis }}</td>
                        <td>{{ $p->kredensial->ketersediaan->rujukanTersedia }}</td>
                    </tr>
                @endforeach

            </table>
        @else
            <p class="text-center fs-4">Faskes Tidak Ditemukan</p>
        @endif

        <div class="d-flex justify-content-center my-4">
            {{ $post->links() }}
        </div>
    </section>

@endsection
