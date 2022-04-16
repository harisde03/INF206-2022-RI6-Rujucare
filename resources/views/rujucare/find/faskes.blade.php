@extends('base')

{{-- http://127.0.0.1:8000/find/faskes --}}

@section('title', 'Pencarian Fasilitas Kesehatan')

@section('content')
{{-- Working area --}}
<style>
    th,
    td {
        border: 1px solid;
        border-color: #C4C4C4;
        padding: 8px
    }

    tr:nth-child(odd) {
        background-color: #F8F8F8;
    }

    th {
        background-color: #CCCCCC;
        text-align: left
    }

    table {
        width: 60%;
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

    input[type="search"]::placeholder {
        color: #18A0FB;
        font-size: 20px;
    }
</style>

<br><br><br>

<form class="nosubmit position-relative">
    <input class="nosubmit position-absolute top-50 start-50 translate-middle" type="search" placeholder="Temukan Fasilitas Kesehatan">
</form>

<br><br><br>

<table>
    <tr>
        <th>Nama Fasilitas Kesehatan</th>
        <th>Status Rumah Sakit</th>
        <th>Rujukan Tersedia</th>
    </tr>
    <tr>
        <td>a</td>
        <td>d</td>
        <td>f</td>
    </tr>
    <tr>
        <td>a</td>
        <td>d</td>
        <td>f</td>
    </tr>
</table>
@endsection