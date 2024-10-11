<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(): View{
        $product = DB::table("products")->get();
        return view('ProductPage', ['products' => $product]);
    }

    public function productById($id)
    {
        // Находим продукт по его ID
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }
}
