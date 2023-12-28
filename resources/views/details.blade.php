@extends('layouts.home')

@section('content')
<div class="header container my-5">
    {{-- <div class="my-4 text-primary">
        <a class="text-decoration-none text-primary fs-5" href="">Beranda</a>
        /
        <a class="text-decoration-none text-primary fs-5" href="" >Product</a>
    </div> --}}
<div class="item-product p-4 border rounded px-5">
    <div class="row">
        <div class="col-md-4 my-3">
            <div class="main-img">
                <img class="rounded img-fluid" src="{{$product->img_url_product}}" alt="Product">
            </div>
        </div>
        <div class="col-md-7">
            <div class="px-3 my-3">
                <h5 class="fw-light text-primary">Gerai UMKM Blitar</h5>
                <div class="text-normal my-3">
                    <p>{{$product->Alamat}}</p>
                </div>

                <div class="product">
                    <h2 class="fw-semibold">{{$product->nama_product}}</h2>
                </div>

                <div class="my-4">
                 <h2 class=""> Rp.{{$product->harga_product}}.000</h2>
                </div>
                <div class="my-4">
                    <hr>
                    <p class="text-color mb-1">Deskripsi Produk:</p>
                    <p>{{$product->deskripsi_product}}</p>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection