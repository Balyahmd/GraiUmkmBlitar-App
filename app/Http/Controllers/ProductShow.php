<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Providers\BooyerMoreProvider;

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
        //
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

    public function boyerMoore($text, $pattern)
    {
        $textLength = strlen($text);
        $patternLength = strlen($pattern);
        $lastChar = [];

        // ... (preprocessing - generate bad character heuristic)

        $i = 0;
        while ($i <= $textLength - $patternLength) {
            $j = $patternLength - 1;

            while ($j >= 0 && $pattern[$j] == $text[$i + $j]) {
                $j--;
            }

            if ($j < 0) {
                return $i; // Match found, return the position
            } else {
                for ($i = 0; $i < $patternLength; $i++) {
                    $lastChar[ord($pattern[$i])] = $i;
                }
                // Mismatch: adjust indices using bad character heuristic and good suffix rule
                $charIndex = ord($text[$i + $j]);
                // $shift = max(1, $j - $lastChar[$charIndex]);
                $shift = isset($lastChar[$charIndex]) ? max(1, $j - $lastChar[$charIndex]) : $j + 1;
                $i += $shift;
            }
            dd($i);
        }

        return -1; // No match found
    }


    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $products = Product::all();
    //         $foundProducts = [];

    //         foreach ($products as $product) {
    //             $result = $this->boyerMoore(strtolower($product->nama_product), strtolower($request->search));

    //             if ($result !== -1) {
    //                 $foundProducts[] = $product;
    //             }
    //         }
    //         return view('product', ['product' => $foundProducts]);
    //     } else {
    //         $product = Product::all();
    //         return view('product', ['product' => $product]);
    //     }
    // }

    public function search(Request $request)
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Extract product names from the objects in $products
        $productNames = $products->pluck('nama_product')->toArray();

        // Perform the Boyer-Moore search on the extracted product names
        $product = $this->boyerMoore($productNames, $request->search);

        // Pass the search result to the view
        return view('product', ['product' => $product]);
    }


    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         // $teks = product::all();
    //         $product = product::where('nama_product', 'LIKE', '%' . $request->search . '%')->get();
    //         // $product = $this->BooyerMore($teks, $request->search);
    //     } else {
    //         $product = product::all();
    //     }
    //     return view('product', ['product' => $product]);
    // }
}
