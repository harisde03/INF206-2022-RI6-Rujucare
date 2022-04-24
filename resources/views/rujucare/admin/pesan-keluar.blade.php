@extends('base')

{{-- http://127.0.0.1:8000/admin/pesan-keluar --}}

@section('title', 'Pesan Keluar')

@section('content')
<div class="col mb-3">
    <div class="row"><h3>Informasi Pesan Rujukan</h3></div>

    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        RSUZA: Mohon pemeriksaan dan perawatan inap
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <img src="{{ URL::asset('assets/images/example.png') }}" alt="surat rujukan">
      </div>
    </div>
  </div>
  <div class="accordion-item">
    
  <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        RSU Ibu dan Anak: Mohon pemeriksaan dan perawatan inap
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <img src="{{ URL::asset('assets/images/example.png') }}" alt="surat rujukan">
      </div>
    </div>
  </div>
  <div class="accordion-item">
     </div>
    </div>
  </div>
</div>
        
@endsection
