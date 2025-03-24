<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $productCount = Products::count();
        $categoryCount = Category::count();


        return view('pages.dashboard.admin', compact('productCount', 'categoryCount'));
    }
}
