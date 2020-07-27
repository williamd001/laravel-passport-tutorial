<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
}
