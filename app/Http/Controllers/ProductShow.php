<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Providers\BooyerMoreProvider;
use BooyerMoore;

class ProductShow extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $productList = product::paginate(3);
        $product = product::find($id);
        return view('details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->has('search') && $request->search !== '') {
            //Mengmbil Data Inputan Dari searching dan mengubah data searching menjadi string
            $pattern = explode(' ', strtolower($request->search));
            //Mengambil semua Data Produk Dari Database
            $allProducts = Product::all();
            $foundProducts = [];

            foreach ($allProducts as $product) {
                $productName = strtolower($product->nama_product);
                $matches = false;

                foreach ($pattern as $term) {
                    //Penerapan Metode Boyer moore
                    $index = BooyerMoreProvider::search($productName, $term);

                    if ($index !== -1) {
                        $matches = true;
                        break; // Break the loop when any term is found
                    }
                }

                if ($matches) {
                    $foundProducts[] = $product;
                }
            }

            return view('product', ['product' => $foundProducts]);
        } else {
            //Apabila Data tidak ditemukan maka akan mengembalikan data semua produk
            $products = Product::all();
            return view('product', ['product' => $products]);
        }
    }
}
