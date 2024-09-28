@extends('layout.quotare')

@section('content')
  <div id="wizard_container">
    <div id="top-wizard">
      <div id="progressbar"></div>
    </div>
    <!-- /top-wizard -->
    <div class="decorative_bg bg_3"></div>
    <form method="POST" action="/pendaftaran" enctype="multipart/form-data" novalidate>
      @csrf
      <input id="website" name="website" type="text" value="">
      <!-- Leave input above for security protection, read docs for details -->
      <div id="middle-wizard">

        <div class="step">
          <div class="question_title">
            <h3>Sebelum Isi Formulir yuk kunjungi & ikuti social media kami <span class="highlight">The Next Turbo</span>
            </h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
              <div class="list_block">
                <ul class="fs-100 text-center" style="font-size: 35px">
                  <li>
                    <div class="checkbox_radio_container">
                      <a class="btn btn-secondary p-2" href="https://chat.whatsapp.com/FzGfohdbwD440ySxs2D9A1" target="_blank"><i
                          class="bi bi-chat-dots"></i> Grub Chat</a>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <a class="btn btn-secondary p-2" href="https://whatsapp.com/channel/0029VaR07k17Noa4bLsatV1U" target="_blank"><i
                          class="bi bi-whatsapp"></i> WhatsApp Saluran</a>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <a class="btn btn-secondary p-2" href="https://www.instagram.com/turbo_main?igsh=a2p5cnUzNnNhYjg1" target="_blank"><i
                          class="bi bi-instagram"></i> Instagram</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="step">
          <div class="question_title">
            <h3>Selama bergabung dengan <span class="highlight">The Next Turbo</span> saya bersedia!</h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
              <div class="list_block">
                <ul>
                  <li>
                    <div class="checkbox_radio_container">
                      <input type="checkbox" id="pertama" name="pertama" class="required">
                      <label class="checkbox" for="pertama"></label>
                      <label for="pertama" class="wrapper">Mengikuti Seluruh Kegiatan The Next Turbo</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <input type="checkbox" id="kedua" name="kedua" class="required">
                      <label class="checkbox" for="kedua"></label>
                      <label for="kedua" class="wrapper">Tidak sedang terdaftar di ukm atau organisasi apapun. Baik
                        sebelum atau saat bergabung di The Next Turbo</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <input type="checkbox" id="ketiga" name="ketiga" class="required">
                      <label class="checkbox" for="ketiga"></label>
                      <label for="ketiga" class="wrapper">Follow Akun instagram Turbo-Main</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <input type="checkbox" id="keempat" name="keempat" class="required">
                      <label class="checkbox" for="keempat"></label>
                      <label for="keempat" class="wrapper">Follow Akun WhatsApp Comunity Turbo-Main</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox_radio_container">
                      <input type="checkbox" id="kelima" name="kelima" class="required">
                      <label class="checkbox" for="kelima"></label>
                      <label for="kelima" class="wrapper">Bergabung di Grub WhatsApp The Next Turbo</label>
                    </div>
                  </li>
                </ul>
                <small><em>Multiple selections *</em></small>
              </div>
              <!-- /list_block-->
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /Step -->
        <div class="step">
          <div class="question_title">
            <h3>Berikan alasan yang jelas mengapa anda ingin bergabung dengan <span class="highlight">The Next
                Turbo</span>? <br>
            </h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
              <div class="list_block">
                <ul>
                  <li>
                    <div class="checkbox_radio_container">
                      <label class="form" for="alasan"></label>
                      <textarea name="alasan" class="wrapper" required style="height: 200px"></textarea>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /list_block-->

            </div>
          </div>
          <!-- /row-->
        </div>
        <!-- /Step -->
        <div class="step">
          <div class="question_title">
            <h3>Sudah Punya <span class="highlight">website portfolio</span> ?</h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
              <!-- /list_block-->
              <div class="form-group">
                <input type="text" name="link_portofolio" id="link_portfolio" class="form-control required">
                <label for="link_portfolio">Link Portofolio</label>
              </div>
              <div class="form-group">
                <label for="gambar" class="mb-2">Foto Profil Pribadi</label>
                <input type="file" name="gambar" id="gambar" class="form-control required">
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
        <!-- /Step -->
        {{-- <div class="step">
          <div class="question_title">
            <h3>Seberapa Ingin anda bergabung dengan <span class="highlight">The Next Turbo?</span></h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-7 col-md-10">
              <div class="rounded_slider">
                <div id="budget_slider"></div>
                <p>Menjadi pertimbangan kami untuk menerima anda bergabung menjadi bagian dari The Next Turbo</p>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- /Step -->
        <div class="submit step">
          <div class="question_title">
            <h3>Lengkapi Profil Anda <span class="highlight">Details</span></h3>
            <p>Akar Rumput dan Darah Daging Informatika <br> #KaryaNyataUntukUNIBA.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control required">
                <label for="email">Email</label>
              </div>
              <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-control required">
                <label for="nama">Nama Lengkap</label>
              </div>
              <div class="form-group">
                <input type="text" name="nim" id="nim" class="form-control required">
                <label for="nim">NIM</label>
              </div>
              <div class="form-group">
                <select name="kelas" id="" class="form-select required">
                  <option disabled selected>Kelas Informatika</option>
                  <option value="A 2022">A 2022</option>
                  <option value="B 2022">B 2022</option>
                  <option value="C 2022">C 2022</option>
                  <option value="A 2023">A 2023</option>
                  <option value="B 2023">B 2023</option>
                  <option value="C 2023">C 2023</option>
                  <option value="D 2023">D 2023</option>
                  <option value="E 2023">E 2023</option>
                  <option value="F 2023">F 2023</option>
                </select>
              </div>
              <div class="form-group">
                <select name="angkatan" id="" class="form-select required">
                  <option disabled selected>Angkatan</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>
              <div class="terms">
                <label class="container_check">Setuju dengan <a href="#" data-bs-toggle="modal"
                    data-bs-target="#terms-txt">Syarat & Ketentuan</a>
                  <input type="checkbox" name="terms" value="Yes" class="required">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /Step -->
      </div>
      <!-- /middle-wizard -->
      <div id="bottom-wizard">
        <button type="button" name="backward" class="backward btn_1">Prev</button>
        <button type="button" name="forward" class="forward btn_1">Next</button>
        <button type="submit" name="process" class="submit btn_1">Submit</button>
      </div>
      <!-- /bottom-wizard -->
    </form>
  </div>
@endsection
