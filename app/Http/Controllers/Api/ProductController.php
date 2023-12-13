<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::orderBy('nama_product', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataProduct = new product;

        $rules = [
            'nama_product' => 'required',
            'harga_product' => 'required',
            'deskripsi_product' => 'required',
            'Alamat' => 'required',
            'img_url_product' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ], 200);
        }

        $dataProduct->nama_product = $request->nama_product;
        $dataProduct->harga_product = $request->harga_product;
        $dataProduct->deskripsi_product = $request->deskripsi_product;
        $dataProduct->Alamat = $request->Alamat;
        $dataProduct->img_url_product = $request->img_url_product;

        $post = $dataProduct->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = product::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
                'data' => $data
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataProduct = product::find($id);
        if (empty($dataProduct)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama_product' => 'required',
            'harga_product' => 'required',
            'deskripsi_product' => 'required',
            'Alamat' => 'required',
            'img_url_product' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal update data',
                'data' => $validator->errors()
            ], 200);
        }

        $dataProduct->nama_product = $request->nama_product;
        $dataProduct->harga_product = $request->harga_product;
        $dataProduct->deskripsi_product = $request->deskripsi_product;
        $dataProduct->Alamat = $request->Alamat;
        $dataProduct->img_url_product = $request->img_url_product;

        $post = $dataProduct->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses update data',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataProduct = product::find($id);
        if (empty($dataProduct)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $delete = $dataProduct->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);
    }
}
