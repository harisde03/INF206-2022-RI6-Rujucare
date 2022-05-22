@extends('base')

{{-- http://127.0.0.1:8000/find/faskes --}}
{{-- Author: Ahmad Chairiansyah --}}

@section('title', 'Pencarian Fasilitas Kesehatan')

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
        width: 65%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse
    }

    form.nosubmit {
        border: none;
        padding: 0;
    }

    input.nosubmit {
        width: 45%;
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

<div class="row justify-content-center">
    <div class="col-md-12">
        <form class="nosubmit position-relative" name="search">
            <div class="">
                <input class="form-control nosubmit position-absolute top-50 start-50 translate-middle" autocomplete="off" type="search" name="search" placeholder="Temukan Fasilitas Kesehatan" value="{{request('search')}}">
                <input class="btn btn-info position-absolute" type="hidden">
            </div>
        </form>
    </div>
</div>

<br><br><br>
@if ($post->count())
    <table class="mb-3">
        <tr>
            <th>Nama Fasilitas Kesehatan</th>
            <th style="width:34.5%">Status Fasilitas Kesehatan</th>
            <th style="width:27.75%">Kamar Tersedia</th>
        </tr>

        @foreach ( $post as $p)
        <tr>
            <td> <a href="/faskes/{{$p->namaPublik}}" >{{$p->namaPublik}}</a></td>
            <td>Aktif</td>
            <td>{{$p->getKetersediaan->kamarTersedia}}</td>
        </tr>
        @endforeach

    </table>
@else
    <p class="text-center fs-4">Faskes Tidak Ditemukan</p>

@endif
<div class="d-flex justify-content-end">
    {{$post->links()}}
</div>


@endsection
