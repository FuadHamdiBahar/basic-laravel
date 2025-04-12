<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;


class ViewController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function updateTransaction($id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.update', [
            'transaction' => $transaction,
        ]);
    }

    public function detailTransaction($id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.detail', [
            'transaction' => $transaction,
        ]);
    }

    public function listTransaction()
    {
        $transactions = Transaction::query()->orderBy('diantar', 'asc')->orderBy('dibayar', 'asc')->orderBy('id', 'asc')->get();
        return view('transaction.list', [
            'transactions' => $transactions,
        ]);
    }

    public function posIndex()
    {
        $products = Product::all();
        return view('pos.index', [
            'products' => $products,
        ]);
    }

    public function index()
    {
        return view('index');
    }
}
