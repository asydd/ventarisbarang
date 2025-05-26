<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    public function index()
    {
        try {
            $user = User::all();
            $transactions = Transaksi::all();    
            return view('pages.transaksi.index',compact('transactions', 'user'));
        } catch (\Exception $e) {
            Log::error("Error in TransaksiController@index: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function create()
{
    try {
        $users = User::all();
        // dd($users); // Menampilkan semua data user yang diambil
        return view('pages.transaksi.create', compact('users'));
    } catch (\Exception $e) {
        Log::error("Error in TransaksiController@create: " . $e->getMessage());
        return view('error.index');
    }
}

    public function store(Request $request)
{
    //dd('h');
    // dd($request->all());
    $data = [
        'user_id' => 1, // Ubah id_user menjadi user_id
        'type' => $request->input('type'),
        'quantity' => $request->input('quantity'),
        'transaction_date' => $request->input('transaction_date'),
        'description' => $request->input('description'),
    ];

    //dd($data);
    // try {
        Transaksi::create($data);
        

        return redirect('/transactions')->with('success', 'Transaksi berhasil ditambahkan.');
    // } catch (\Exception $e) {
    //     Log::error("Error in TransaksiController@store: " . $e->getMessage());
    //     return view('error.index');
    // }
}

    public function edit($id)
    {
        try {
            $transaction = Transaksi::findOrFail($id);
            $users = User::all();
            return view('pages.transaksi.edit', compact('transaction', 'users'));
        } catch (\Exception $e) {
            Log::error("Error in TransaksiController@edit: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'id_user' => 'required|exists:users,id',
                'type' => 'required|string|in:in,out',
                'quantity' => 'required|numeric|min:1',
                'transaction_date' => 'required|date',
                'description' => 'nullable|string',
            ]);

            $transaction = Transaksi::findOrFail($id);
            $transaction->update([
                'user_id' => $request->user_id,
                'type' => $request->type,
                'quantity' => $request->quantity,
                'transaction_date' => $request->transaction_date,
                'description' => $request->description,
            ]);

            return redirect('/transactions')->with('success', 'Transaksi berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error("Error in TransaksiController@update: " . $e->getMessage());
            return view('error.index');
        }
    }

    public function destroy($id)
    {
        try {
            Transaksi::destroy($id);
            return redirect('/transactions')->with('success', 'Transaksi berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error("Error in TransaksiController@destroy: " . $e->getMessage());
            return view('error.index');
        }
    }
}
