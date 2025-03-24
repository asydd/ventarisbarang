<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Products::with('category')->paginate(3);
            return view('pages.products.index')->with([
                "products" => $products,
            ]);
        } catch (\Exception $e) {
            Log::error("Error in ProductController@index: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function create()
    {
        try {
            $categories = Category::all();
            return view('pages.products.create', [
                "categories" => $categories,
            ]);
        } catch (\Exception $e) {
            Log::error("Error in ProductController@create: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                "name" => "required|min:3",
                "description" => "nullable",
                "price" => "required",
                "stock" => "required",
                "category_id" => "required",
                "sku" => "required",
            ]);

            Products::create($validated);
            return redirect('/products');
        } catch (\Exception $e) {
            Log::error("Error in ProductController@store: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function edit($id)
    {
        try {
            $categories = Category::all();
            $product = Products::findOrFail($id);
            return view('pages.products.edit', [
                "categories" => $categories,
                "product" => $product,
            ]);
        } catch (\Exception $e) {
            Log::error("Error in ProductController@edit: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                "name" => "required|min:3",
                "description" => "nullable",
                "price" => "required",
                "stock" => "required",
                "category_id" => "required",
                "sku" => "required",
            ]);

            Products::where('id', $id)->update($validated);
            return redirect('/products');
        } catch (\Exception $e) {
            Log::error("Error in ProductController@update: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function delete($id)
    {
        // try {
            $product = Products::findOrFail($id);
            $product->delete();
            return redirect('/products');
        // } catch (\Exception $e) {
        //     Log::error("Error in ProductController@delete: " . $e->getMessage());
        //     return view('error.index');
        // }
    }
}
