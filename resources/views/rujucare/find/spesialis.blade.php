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

    input.nosubmit[type="text"]::placeholder {
        color: #18A0FB;
        font-size: 20px;
    }
</style>

<br><br><br>

<form class="nosubmit position-relative" action="/find/spesialis">
    <input class="form-control nosubmit position-absolute top-50 start-50 translate-middle" type="text" placeholder="Temukan Spesialis" name="search" autocomplete="off">
</form>

<br><br><br>

<table class="mb-3">
    <tr>
        <th style="width: 37.75%">Nama Spesialis</th>
        <th>Kemampuan Spesialis</th>
        <th>Rujukan Tersedia</th>
    </tr>
    {{-- @dd($post[0]->getKredensial->getSpesialis[0]->namaSpesialis) --}}
    @foreach ( $post as $p )
    @foreach ($p->getKredensial->getSpesialis as $spesialis)
    <tr>
    <tr>
        <td>
            <a href="/faskes/{{$p->namaFaskes}}" style="text-decoration: none">
                {{$spesialis->namaSpesialis}}
            </a>
        </td>
        <td>{{$spesialis->kemampuanSpesialis}}</td>
        <td>{{$p->getKredensial->getketersediaan->kamarTersedia}}</td>
    </tr>
    </tr>
    @endforeach
    @endforeach
</table>
@endsection