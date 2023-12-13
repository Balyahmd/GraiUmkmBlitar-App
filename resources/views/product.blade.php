@extends('layouts.home')

@section('content')
<div class="product">
    <div id="navbar"></div>
    <div class="header text-center p-5 bg-color-secondary">
    <h1 class="fw-semibold my-4 container">Produk Gerai UKM Blitar</h1>
    @include('component.FormSearch')
</div>

<div class="list-product container">
    <div class="row row-cols-2 row-cols-lg-3 g-3 g-lg-5">
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
    <div id="product-container" class="row row-cols-2 row-cols-lg-3 g-3 g-lg-5"></div>
</div>
<div>

@endsection