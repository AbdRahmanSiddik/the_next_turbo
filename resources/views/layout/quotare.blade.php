<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ansonika.com/demos/quotare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2024 07:23:16 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Quotare - Multipurpose Quotation Request HTML Wizard Form">
  <meta name="author" content="Ansonika">
  <title>Quotare - Multipurpose Quotation Request HTML Wizard Form</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('turbo_putih.png') }}" type="image/x-icon">
  {{-- <link rel="apple-touch-icon" type="image/x-icon"
    href="{{ asset('quotare') }}/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
    href="{{ asset('quotare') }}/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
    href="{{ asset('quotare') }}/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
    href="{{ asset('quotare') }}/img/apple-touch-icon-144x144-precomposed.png"> --}}

  <!-- GOOGLE WEB FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">

  <!-- BASE CSS -->
  <link href="{{ asset('quotare') }}/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('quotare') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('quotare') }}/css/vendors.css" rel="stylesheet">

  <!-- YOUR CUSTOM CSS -->
  <link href="{{ asset('quotare') }}/css/custom.css" rel="stylesheet">

</head>

<body class="bg_style_3">

  <div id="preloader">
    <div data-loader="circle-side"></div>
  </div><!-- /Preload -->
  <div id="loader_form">
    <div data-loader="circle-side-2"></div>
  </div><!-- /loader_form -->

  <div class="min-vh-100 d-flex flex-column bg_cover">

    <header>
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-6">
            <a data-bs-toggle="offcanvas" href="#offcanvasNav" role="button" class="btn_nav me-2"><i
                class="bi bi-list"></i></a>
            <a href="/">
                <img src="{{ asset('quotare') }}/img/turbo.png" alt="" width="50" height="35" class="img-fluid">
            </a>
          </div>
          <div class="col-6">
            <div id="social">
              <ul>
                <li style="color: lightgreen; mix-blend-mode: difference"><a href="https://chat.whatsapp.com/FzGfohdbwD440ySxs2D9A1" target="_blank"><i class="bi bi-chat-dots"><small>Chat</small></i></a></li>
                <li><a href="https://whatsapp.com/channel/0029VaR07k17Noa4bLsatV1U" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                <li><a href="https://www.instagram.com/turbo_main?igsh=a2p5cnUzNnNhYjg1" target="_blank"><i class="bi bi-instagram"></i></a></li>
              </ul>
            </div>
            <!-- /social -->
          </div>
        </div>
      </div>
      <!-- /container -->
    </header>
    <!-- /header -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul>
          <li><a href="/" class="animated_link">Pendaftaran</a></li>
          <li><a href="/pengumuman" class="animated_link">Pengumuman</a></li>
          <li><a href="/status" class="animated_link">Cek Status Penerimaan</a></li>
        </ul>
        <hr>
        <ul>
          <li><a href="/kontak" class="animated_link">Contacts</a></li>
        </ul>
      </div>
    </div>
    <!-- /offcanvas nav -->

    <div class="container-fluid d-flex flex-column my-auto py-3">
      <div>
        @yield('content')
        <!-- /Wizard container -->
      </div>
    </div>
    <!-- /Container -->

    <footer>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <p>© 2024 TURBO-MAIN</p>
          </div>
        </div>
        <!-- /Row -->
      </div>
      <!-- /Container -->
    </footer>
    <!-- /Footer -->

  </div>
  <!-- /flex-column -->


  <!-- Modal terms -->
  <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="termsLabel">Syarat & Ketentuan</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <img src="{{ asset('quotare') }}/img/syarat.svg" alt="">
        </div>
      </div>
      <!-- /modal-content -->
    </div>
    <!-- /modal-dialog -->
  </div>
  <!-- /modal -->

  <!-- COMMON SCRIPTS -->
  <script src="{{ asset('quotare') }}/js/common_scripts.min.js"></script>
  <script src="{{ asset('quotare') }}/js/common_functions.js"></script>

  <!-- SPECIFIC SCRIPTS -->
  <script src="{{ asset('quotare') }}/js/wizard_func_1.js"></script>

</body>

<!-- Mirrored from www.ansonika.com/demos/quotare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2024 07:23:36 GMT -->

</html>
