@extends('layouts.home')

@section('content')
<header>
  <div class="header container">
    <div class="row">
      <div class="head col-sm-6 col-md-6 col-lg-6">
        <h1>
          Produk Lokal di <br />
          <span>Rumah BUMN Blitar</span>
          <br />aja dapatnya
        </h1>
        <p class="my-3">
          Temukan produk UMKM dan oleh-oleh khas <br />
          Blitar dapatkan disini
        </p>
        <div>
          <a href="{{'#product-spesial'}}">
            <button class="btn btn-secondary">Order now</button>
          </a>
          <button class="btn btn-success">More menu</button>
        </div>
      </div>
      <div class="head col-sm-6 col-md-6 col-lg-6">
        <img
          src={{"img/home/header.png"}}
          alt="img-header"
          class="w-100" />
      </div>
    </div>
  </div>
</header>

<section class="unggulan">
  <div class="container">
    <h3 class="pt-5 fw-semibold">Produk Unggulan</h3>

    <div class="list-product row row-cols-2 row-cols-lg-3 g-3 g-lg-5">
      <div class="col item">
        <div class="item-product p-3 border rounded">
          <img
            src={{"img/product/product-1.png"}}
            class="object-fit-cover border rounded"
            alt="" />

          <div class="row mt-3">
            <div class="col-9">
              <h5 class="fw-semibold">Keripik Pare Pak Jo</h5>
              <p class="fw-semibold fs-6">Berat 300 gram</p>
            </div>
            <div class="col-2">
              <h5 class="fw-semibold">12K</h5>
              <button class="btn btn-dark m-0 p-0">
              <img src={{"/img/icon-cart.png"}} class="" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="item-product p-3 border rounded">
          <img
            src={{"img/product/product-1.png"}}
            class="object-fit-cover border rounded"
            alt="" />

          <div class="row mt-3">
            <div class="col-9">
              <h5 class="fw-semibold">Keripik Pare Pak Jo</h5>
              <p class="fw-semibold fs-6">Berat 300 gram</p>
            </div>
            <div class="col-2">
              <h5 class="fw-semibold">12K</h5>
              <button class="btn btn-dark m-0 p-0">
                <img src={{"/img/icon-cart.png"}} class="" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="item-product p-3 border rounded">
          <img
            src={{"img/product/product-1.png"}}
            class="object-fit-cover border rounded"
            alt="" />

          <div class="row mt-3">
            <div class="col-9">
              <h5 class="fw-semibold">Keripik Pare Pak Jo</h5>
              <p class="fw-semibold fs-6">Berat 300 gram</p>
            </div>
            <div class="col-2">
              <h5 class="fw-semibold">12K</h5>
              <button class="btn btn-dark m-0 p-0">
                <img src={{"img/icon-cart.png"}} class="" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="kenapa container my-5">
  <h4 class="fw-semibold">Kenapa harus di Gerai UKM Blitar</h4>

  <div class="container text-center my-5">
    <div class="text row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3 g-lg-5">
      <div class="col">
        <div class="tulisan py-3 px-4 rounded">
          <h5 class="fw-semibold">Produk UMKM Blitar</h5>
          <p class="m-0">Membantu meningkatkan Produk UMKM Lokal</p>
        </div>
      </div>
      <div class="col">
        <div class="tulisan py-3 px-4 rounded">
          <h5 class="fw-semibold">Produk UMKM Blitar</h5>
          <p class="m-0">Membantu meningkatkan Produk UMKM Lokal</p>
        </div>
      </div>
      <div class="col">
        <div class="tulisan py-3 px-4 rounded">
          <h5 class="fw-semibold">Produk UMKM Blitar</h5>
          <p class="m-0">Membantu meningkatkan Produk UMKM Lokal</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="aboutrb w-100 min-vh-100">
  <div id="tentang-kami">
    <img src={{"img/home/about.png"}} class="w-100 my-5" alt="" />
  </div>
</div>

<div class="product-spesial" id="product-spesial">
  <div class="container">
    <h3 class="my-4 fw-semibold">Special menu for you</h3>
    <div
      id="product-container"
      class="row row-cols-2 row-cols-lg-3 g-3 g-lg-5">
      @foreach ($product as $product )
      <div class="col gap-3">
          <div class="item-product p-3 border rounded">
              <img src={{$product->img_url_product}} class="object-fit-cover border rounded" alt="">
              
              <div class="row mt-3">
                  <div class="col-9">
                      <h5 class="fw-semibold">{{$product->nama_product}}</h5>
                      <p class="fw-semibold fs-6">{{$product->deskripsi_product}}</p>
                  </div>
                  <div class="col-2">
                      <h5 class="fw-semibold">{{$product->harga_product}}K</h5>
                      <button class="btn btn-dark m-0 p-0">
                          <img src="{{asset('img/icon-cart.png')}}" class="" alt="">
                      </button>
                  </div>
              </div>
          </div>
      </div>
          @endforeach
    </div>
  </div>
</div>

<div class="testimonial">
  <div class="">
    <img src={{"img/home/testimonial.svg"}} alt="" class="w-100" />
  </div>
</div>
@endsection
