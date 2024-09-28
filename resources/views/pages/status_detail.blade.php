@extends('layout.quotare')

@section('content')
  <div id="wizard_container">
    <div id="top-wizard">
      <div id="progressbar"></div>
    </div>
    <!-- /top-wizard -->
    <div class="decorative_bg bg_1"></div>
    <div id="middle-wizard">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h5 class="mt-2">{{ $detail->nama }}</h5>
          @if ($detail->status == 'pending')
            <span class="bg-warning p-2 text-white rounded ms-auto">{{ $detail->status }}</span>
          @endif
          @if ($detail->status == 'accepted')
            <span class="bg-success p-2 text-white rounded ms-auto">Diterima</span>
          @endif
          @if ($detail->status == 'rejected')
            <span class="bg-danger p-2 text-white rounded ms-auto">Ditolak</span>
          @endif
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-mb-12 mb-2">
                    <img src="{{ asset('profil/' . $detail->foto_profil) }}" width="150px">
                </div>
                <div class="col-mb-12 mb-2 row">
                    <div class="col-lg-4 mb-2">Status Diterima</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->status }}</div>
                    <div class="col-lg-4 mb-2">Portofolio</div>
                    <div class="col-lg-8 mb-2">: <a href="{{ url($detail->link_portofolio) }}" target="_blank">{{ $detail->link_portofolio }}</a></div>
                    <div class="col-lg-4 mb-2">Email</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->email }}</div>
                    <div class="col-lg-4 mb-2">kelas Informatika</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->kelas }}</div>
                    <div class="col-lg-4 mb-2">NIM</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->nim }}</div>
                    <div class="col-lg-4 mb-2">Angkatan</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->angkatan }}</div>
                    <div class="col-lg-4 mb-2">Alasan</div>
                    <div class="col-lg-8 mb-2">: {{ $detail->alasan }}</div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /middle-wizard -->
    <div id="bottom-wizard">
      <a href="/" name="process" class="btn btn-danger">Home</a>
    </div>
  </div>
@endsection
