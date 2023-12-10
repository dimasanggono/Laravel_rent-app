<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Product::with(['Category'])->take(4)->get();
        return view('pages.home', [
            'data' => $data
        ]);
    }
}
