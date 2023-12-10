<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $data = Product::with(['Category'])->paginate(4);
        return view('pages.product', [
            'data' => $data
        ]);
    }
}
