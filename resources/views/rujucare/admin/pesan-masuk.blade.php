@extends('base')

{{-- http://127.0.0.1:8000/admin/pesan-masuk --}}

@section('title', 'Pesan Masuk')

@section('content')
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
                            <a href="{{ URL('/admin/informasi-ketersediaan') }}" class="nav-link link-dark"
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
                            <a href="{{ URL('/admin/pesan-masuk') }}" class="nav-link active">
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
                    <h2>Informasi Pesan Masuk</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($post->pesanMasuk()->get() as $p)
                                <div class="accordion mb-3" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo{{ $p->id_pesan_masuk }}"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                <strong>
                                                    FROM :
                                                    {{ \App\Models\Faskes::where('id_faskes', $p->id_faskes_pengirim)->first()->kredensial->namaPublik }}
                                                    :
                                                    {{ $p->nomorBpjs }} :
                                                    {{ $p->deskripsiPesanMasuk }}
                                                    @if ($p->persetujuanPesanMasuk == 0)
                                                        <span class="text-danger" disabled>[DISAPPROVED]</span>
                                                    @elseif ($p->persetujuanPesanMasuk == 1)
                                                        <span class="text-warning" disabled>[NEED RESPOND]</span>
                                                    @else
                                                        <span class="text-teal" disabled>[APPROVED]</span>
                                                    @endif
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="demo{{ $p->id_pesan_masuk }}" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col">
                                                        <div class="row">
                                                            <img src="{{ URL::asset('storage/' . $p->gambarPesanMasuk) }}"
                                                                alt="surat rujukan">
                                                        </div>
                                                        <div class="row">
                                                            <div class="d-flex">
                                                                <div class="p-2 flex-grow-1">
                                                                    {{-- <a class="btn btn-danger" href="#" role="button"><i
                                                                            class="fa fa-trash"
                                                                            aria-hidden="true"></i></a> --}}
                                                                </div>
                                                                <div class="p-2">
                                                                    @if ($p->persetujuanPesanMasuk == 1)
                                                                        <a class="btn btn-danger"
                                                                            href="{{ URL('/admin/rujuk-kembali/' .
                                                                            \App\Models\Faskes::where('id_faskes', $p->id_faskes_pengirim)->first()->kredensial->urlFaskes) .
                                                                            '/' .
                                                                            $p->id_pesan_masuk }}"
                                                                            role="button">Tolak</a>
                                                                        <a class="btn btn-teal"
                                                                            href="{{ URL('/admin/pesan-masuk/terima/' .
                                                                            \App\Models\Faskes::where('id_faskes', $p->id_faskes_pengirim)->first()->kredensial->urlFaskes) .
                                                                            '/' .
                                                                            $p->id_pesan_masuk }}"
                                                                            role="button">Terima</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
