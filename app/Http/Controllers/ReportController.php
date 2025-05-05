<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Item;
use App\Models\Products;
use App\Models\Supplier;
use App\Models\Transaction;
use App\Models\Transaksi;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'total_categories' => Category::count(),
            'total_products' => Products::count(),
            'total_items' => Item::count(),
            'total_suppliers' => Supplier::count(),
            'total_transactions' => Transaksi::count(),
            'total_in' => Transaksi::where('type', 'in')->sum('quantity'),
            'total_out' => Transaksi::where('type', 'out')->sum('quantity'),
            'current_stock' => Item::sum('stock'),
        ];

        return view('pages.report.index', compact('data'));
    }
}
