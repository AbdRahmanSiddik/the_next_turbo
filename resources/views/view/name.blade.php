<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kirim Email</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="card">
    <div class="card-header">
        <h1>Pendaftaran Berhasil untuk {{ $detail->nama }}</h1>
    </div>
    <div class="card-body">
        <p>Pendaftaran dengan Kode <strong class="text-primary bg-warning">{{ $detail->token_registrasi }}</strong> telah berhasil</p>
        <p>silahkan cek status penerimaan dengan menggunakan kode tersebut secara berkala di website resmi<br></p>
    </div>
    <div class="card-footer">
        <a href="https://join.turbo-main.my.id/status/" target="_blank" class="btn btn-success"> Cek Status Pendaftaran</a>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
