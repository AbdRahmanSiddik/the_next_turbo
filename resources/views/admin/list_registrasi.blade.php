@extends('layout.admin')

@section('content')
  <main>
    <div class="container margin_60_35">
      <div class="row justify-content-center">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Angkatan</th>
              <th>Status</th>
              <th>Kode</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registrations as $item)
              <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->angkatan }}</td>
                <td
                  class="{{ $item->status == 'pending' ? 'text-warning' : '' }} {{ $item->status == 'accepted' ? 'text-success' : '' }} {{ $item->status == 'rejected' ? 'text-danger' : '' }}">
                  {{ $item->status }}</td>
                <td>{{ $item->token_registrasi }}</td>
                <td>
                  @if ($item->status == 'pending')
                    <a href="/accept/{{ $item->token_registrasi }}" class="btn btn-warning">Terima</a>
                    <a href="/reject/{{ $item->token_registrasi }}" class="btn btn-danger">Tolak</a>
                  @endif
                  @if ($item->status == 'accepted' | $item->status == 'rejected')
                    <a href="/denied/{{ $item->token_registrasi }}" class="btn btn-success">Batalkan</a>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- End row -->
    </div>
  </main>
@endsection
