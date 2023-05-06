<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public $incrementing = true;
    public function index() {
        $transactions = Transaction::orderBy('transactionDate', 'desc')->get();

        return view('transactions', compact('transactions'));
    }

    public function dataInsert(Request $request)
    {
        $transaction = new Transaction();
        $transaction->coffee_id = $request->coffee_id; // assuming you passed the coffee id in the request
        $transaction->user_id = $request->user_id; // assuming you have authentication set up
        $transaction->transactionDate = date('Y-m-d h:i:s');
        $transaction->save();

        return response()->json(['success' => true]);
    }
}
