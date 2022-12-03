
@extends('layouts.main')

@section('container')
<div class="d-flex flex-row"> 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Pilih Unit dan Spesialis
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
            <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
            <div class="card-body">
              <h5 class="card-title text-center">Dr Jennifer</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk
                of the
                card's content.</p>
            </div>
            <button type="button" class="btn btn-info center-block" data-bs-dismiss="modal">Neuro & Cardiac</button>
            <button type="button" class="btn btn-info center-block my-2" data-bs-dismiss="modal">Lihat Detail</button>   
            {{-- modal --}}
            {{-- akhir modal --}}
          </div>
        </div>
        <div class="col-3 pt-4">
          <div class="card border-0 d-flex mx-auto">
            <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
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
            <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
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
            <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
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
              <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
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
              <img src="img/dok2.jpg" class="card-img-top" alt="projek-1">
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