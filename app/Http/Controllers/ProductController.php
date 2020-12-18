<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('producto'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('producto'));
    }

    public function update(Product $product)
    {
        $data = request()->validate(Product::rules());
        $product->update($data);
        return redirect('products.index');
    }

    public function store()
    {
        $data = request()->validate(Product::rules());
        DB::table('products')->insert($data);
        return redirect('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products.index');
    }
}
