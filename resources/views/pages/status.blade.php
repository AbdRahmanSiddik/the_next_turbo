@extends('layout.quotare')

@section('content')
  <div id="wizard_container">
    <div id="top-wizard">
      <div id="progressbar"></div>
    </div>
    <!-- /top-wizard -->
    <div class="decorative_bg bg_4"></div>
    <form method="POST" action="/status">
      @csrf
      <input id="website" name="website" type="text" value="">
      <!-- Leave input above for security protection, read docs for details -->
      <div id="middle-wizard">
        <div class="submit step">
          <div class="question_title">
            <h3>Cek Status Pendaftaran & <span class="highlight">Penerimaan</span></h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="form-group">
                <input type="text" name="token_registrasi" id="token_registrasi" class="form-control required">
                <label for="token_registrasi">Kode Pendaftaran</label>
              </div>
              @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /Step -->
      </div>
      <!-- /middle-wizard -->
      <div id="bottom-wizard">
        <button type="submit" name="process" class="submit btn_1">Submit</button>
      </div>
      <!-- /bottom-wizard -->
    </form>
  </div>
@endsection
