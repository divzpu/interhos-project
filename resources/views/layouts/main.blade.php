<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Interhos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }} "href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Rumah Sakit') ? 'active' : '' }} "  href="/rumahsakit">Rumah Sakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dokter') ? 'active' : '' }} "  href="/dokter">Dokter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Rawat Inap') ? 'active' : '' }} "  href="/rawatinap">Rawat Inap</a>
        </li>
        <button type="button" class="btn btn-info">LOGIN</button>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <footer class="text-white text-center p-3 d-flex align-items-center justify-content-center bg-primary">
      <p style="margin: 0 auto; height : 50px">Copyright 2022 <a href="https://www.instagram.com/divazahraisyap/"
          class="text-white fw-bold">Interhos
          P</a></p>
    </footer>
  </body>
</html>