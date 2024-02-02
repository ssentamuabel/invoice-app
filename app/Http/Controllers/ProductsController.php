<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function all_product()
    {
        $products = Products::orderBy('id', 'DESC')->get();
        return response()->json(
            [
                'products' => $products
            ], 200 );
    }
}
