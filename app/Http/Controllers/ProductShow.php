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

    public function BooyerMore($text, $pattern)
    {
        $n = strlen($text);
        $m = strlen($pattern);
        $last = array();

        // Initialize last occurrence array
        for ($i = 0; $i < 256; $i++) {
            $last[$i] = -1;
        }

        // Fill last occurrence array with positions of characters in pattern
        for ($i = 0; $i < $m; $i++) {
            $last[ord($pattern[$i])] = $i;
        }

        $i = $m - 1; // Index for the end of the pattern
        $j = $m - 1; // Index for the end of the text

        while ($i < $n) {
            if ($text[$j] == $pattern[$i]) {
                // Match found
                if ($i == 0) {
                    return $j; // Return the position of the match
                }
                $i--;
                $j--;
            } else {
                // No match, shift based on the last occurrence of the character in pattern
                $i = $m - 1;
                $j += $m - min($i, 1 + $last[ord($text[$j])]);
            }
        };

        return -1; // No match found
    }


    // public function search(Request $request)
    // {
    //     $product = product::all();
    //     $text = strtolower($product);

    //     $pat = $request->query('search');
    //     $pattern = strtolower($pat);

    //     // $value = $this->SearchString($txt, $pattern);

    //     if ($request->has('search')) {
    //         $product = product::where('nama_product', 'LIKE', '%' . $pattern . '%')->get();
    //         $value = $this->BooyerMore($text, $pattern);
    //         dd($value);
    //         // $product = $this->BooyerMore($teks, $request->search);
    //     }
    //     return view('product', ['product' => $product]);
    // }

    public function search(Request $request)
    {
        if ($request->has('search') && $request->search !== '') {
            $pattern = explode(' ', strtolower($request->search));
            $allProducts = Product::all();
            $foundProducts = [];

            foreach ($allProducts as $product) {
                $productName = strtolower($product->nama_product);
                $matches = false;

                foreach ($pattern as $term) {
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
            $products = Product::all();
            return view('product', ['product' => $products]);
        }
    }
}
