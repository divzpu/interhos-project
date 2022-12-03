
@extends('layouts.main')
@section('container')
<div class="d-flex flex-row"> 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Pilih Kota/Kab
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    <form class="d-flex ms-auto" role="search" style="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
     </form>  
</div>
<section id="projects" class="mb-5">
    <div class="container pt-4">
      <div class="row">
        <div class="col-3 pt-4">
          <div class="card border-0 d-flex mx-auto">
            <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
            <div class="card-body">
              <h5 class="card-title text-center">RS Hasan Sadikin</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                of the
                card's content.</p>
            </div>
            <button type="button" class="btn btn-info center-block"  data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</button>
          </div>
        </div>
        <div class="col-3 pt-4">
          <div class="card border-0 d-flex mx-auto">
            <img src="img/rsterpopuler.jpg" class="card-img-top" alt="projek-1">
            <div class="card-body">
              <h5 class="card-title text-center">RS Santosa Bandung</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                of the
                card's content.</p>
            </div>
            <button type="button" class="btn btn-info center-block">Lihat Detail</button>
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
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="container">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Rumah sakit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-info">Dokter</button>
          <div class="row">
            <div class="col-md-8 pt-4">
              <img src="img/rsawal1.jpg" alt="" class="about-img" width="500" height="200">
              <h2 class="text-start pt-4">RS Santosa Bandung</h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Laborum, quam quaerat tempora nesciunt provident architecto sequi? Et fugiat unde,
                aut, corrupti reprehenderit voluptatem at tenetur officiis velit similique eius repudiandae.</p>
              <h3>Poliklinik</h3>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="dropdown pt-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="dropdown pt-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="dropdown pt-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>