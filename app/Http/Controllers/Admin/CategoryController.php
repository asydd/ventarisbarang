<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index() 
    {
        try {
            $categories = Category::paginate(3);
            return view('pages.categories.index')->with([
                "categories" => $categories,
            ]);
        } catch (\Exception $e) {
            Log::error("Error in CategoryController@index: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function create()
    {
        try {
            return view('pages.categories.create');
        } catch (\Exception $e) {
            Log::error("Error in CategoryController@create: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function store(Request $request)
    {
        // try {
            Category::create([
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name'))
            ]);

            return redirect('/categories')->with('success', 'Kategori berhasil ditambahkan.');
        // } catch (\Exception $e) {
        //     Log::error("Error in CategoryController@store: " . $e->getMessage());
        //     return view('error.index');
        // }
    }

    public function edit($id)
    {
        // try {
            $category = Category::find($id);

            return view('pages.categories.edit')->with([
                "category" => $category,
            ]);
        // } catch (\Exception $e) {
        //     Log::error("Error in CategoryController@edit: " . $e->getMessage());
        //     return view('error.index');
        // }
    }

    public function update(Request $request, $id)
    {
        try {
            

            $category = Category::find($id);

            if (!$category) {
                abort(404, "Kategori tidak ditemukan.");
            }

            $category->update([
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name'))
            ]);

            return redirect('/categories')->with('success', 'Kategori berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error("Error in CategoryController@update: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function destroy($id) 
    {
        try {
            $category = Category::find($id);

            if (!$category) {
                abort(404, "Kategori tidak ditemukan.");
            }

            $category->delete();

            return redirect('/categories')->with('success', 'Kategori berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error("Error in CategoryController@destroy: " . $e->getMessage());
            return view('error.index');
        }
    }
}
