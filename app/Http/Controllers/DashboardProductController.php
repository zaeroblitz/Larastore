<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index() {
        return view('dashboard.products');
    }

    public function create() {
        return view('dashboard.products-create');
    }

    public function details() {
        return view('dashboard.products-details');
    }
}