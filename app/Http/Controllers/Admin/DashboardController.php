<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transaction;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $customer = User::count();
        $revenue = Transaction::where('transaction_status', 'SUCCESS')->sum('total_price');
        $transactions = Transaction::count();

        return view('admin.home', [
            'customer' => $customer,
            'revenue' => $revenue,
            'transactions' => $transactions,
        ]);
    }
}