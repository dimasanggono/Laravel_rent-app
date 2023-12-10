<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            "category" => Categories::count(),
            "products" => Product::count()
        ]);
    }
}
