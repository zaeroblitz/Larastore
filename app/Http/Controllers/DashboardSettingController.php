<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function account() {
        return view('dashboard.settings-account');
    }

    public function store() {
        return view('dashboard.settings-store');
    }
}