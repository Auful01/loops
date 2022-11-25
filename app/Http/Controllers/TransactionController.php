<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'package_id' => 'required|integer',
            'payment_method' => 'required|string',
        ]);

        $package = Package::find($request->package_id);

        $transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'package_id' => $package->id,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);

        $transaction->state->pay();

        return redirect(route('home'));
    }


    public function show(Transaction $transaction)
    {
        return view('transaction.show', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->state->confirm();

        return redirect(route('home'));
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->state->cancel();

        return redirect(route('home'));
    }
}
