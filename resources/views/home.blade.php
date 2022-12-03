
@extends('layouts.main')

@section('container')
<!-- awal rs -->
<section class="about mb-5" id="about">
        <div class="container pt-4">
          <div class="row d-flex align-items-center">
            <div class="col-md-6">
              <h1 class="text-start">Pusat Informasi Rumah Sakit di Jawa Barat</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Laborum, quam quaerat tempora nesciunt provident architecto sequi? Et fugiat unde,
                aut, corrupti reprehenderit voluptatem at tenetur officiis velit similique eius repudiandae.</p>
              <button type="button" class="btn btn-primary">Selengkapnya</button>
            </div>
            <div class="col-md-6 ms-auto">
              <img src="img/rsawal1.jpg" alt="" class="about-img" width="600" height="400">
            </div>
          </div>
        </div>
</section>
<!-- akhir rs -->
<!-- card rs -->
<section id="projects" class="mb-5">
        <div class="container pt-4">
          <div class="row text-center">
            <div class="col">
              <h4>Rumah Sakit Terpopuler</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-3 pt-4">
              <div class="card border-0">
                <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
                <div class="card-body">
                  <h5 class="card-title text-center">RS Hasan Sadikin</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                    of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-3 pt-4">
              <div class="card border-0">
                <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
                <div class="card-body">
                  <h5 class="card-title text-center">RS Santosa Bandung</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                    of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-3 pt-4">
              <div class="card border-0">
                <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
                <div class="card-body">
                  <h5 class="card-title text-center">RS Dustira Cimahi</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                    of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-3 pt-4">
              <div class="card border-0">
                <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
                <div class="card-body">
                  <h5 class="card-title text-center">RS Cibabat</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                    of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
<!-- akhir card -->
<!-- landing page 2 -->
<section class="about mb-5" id="about">
        <div class="container pt-4">
          <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="img/rs3.jpg" alt="" class="about-img" width="600" height="400">
            </div>
            <div class="col-md-6 p-5">
              <h1 class="text-start mx-5">Informasi Dokter dan Fasilitas di Rumah Sakit</h1>
              <p class="mx-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Laborum, quam quaerat tempora nesciunt provident architecto sequi? Et fugiat unde,
                aut, corrupti reprehenderit voluptatem at tenetur officiis velit similique eius repudiandae.</p>
              <button type="button" class="btn btn-primary mx-5">Selengkapnya</button>
            </div>
          </div>
        </div>
</section>
<!-- akhir landing page 2 -->
<!-- landing page 3 -->
<section class="about mb-5" id="about">
        <div class="container pt-4">
          <div class="row d-flex align-items-center">
            <div class="col-md-6">
              <h1 class="text-start">Rumah Sakit Terdekat dengan Anda</h1>
              <button type="button" class="btn btn-primary">Selengkapnya</button>
            </div>
            <div class="col-md-6 ms-auto">
              <img src="img/rsawal1.jpg" alt="" class="about-img" width="600" height="400">
            </div>
          </div>
        </div>
      </section>
<!-- akhir landing page 3 -->
<!-- login -->
<section id="contact">
    <div class="container pt-4">
      <div class="row text-center">
        <div class="col">
          <h4>Login</h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-primary mb-5" style="bg-primary;">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- akhir login -->
@endsection