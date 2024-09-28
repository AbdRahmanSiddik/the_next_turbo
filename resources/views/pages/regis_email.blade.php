
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quotare - Multipurpose Quotation Request HTML Wizard Form">
    <meta name="author" content="Ansonika">
    <title>The Next Turbo - Registration</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('quotare') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('quotare') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('quotare') }}/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('quotare') }}/css/custom.css" rel="stylesheet">

    <script type="text/javascript">
    function delayedRedirect(){
        window.location = "/status"
    }
    </script>
</head>

<body onLoad="setTimeout('delayedRedirect()', 7000)" style="background-color:#fff;">
<div id="success">
            <div class="icon icon--order-success svg">
                 <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                  <g fill="none" stroke="#8EC343" stroke-width="2">
                     <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                     <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                  </g>
                 </svg>
             </div>
            <h4><span>Pendaftaran berhasil</span>Cek email secara berkala untuk melihat status</h4>
            <small>You will be redirect back in 5 seconds.</small>
        </div><!-- END SEND MAIL SCRIPT -->

</body>
</html>
