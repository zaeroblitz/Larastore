<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    public function account() {
        $user = Auth::user();
        return view('dashboard.settings-account', [
            'user' => $user,
        ]);
    }

    public function store() {
        $user = Auth::user();
        $categories = Category::all();
        return view('dashboard.settings-store', [
            'user' => $user,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $redirect) {
        $data = $request->all();
        $item = Auth::user();

        $item->update($data);

        return redirect()->route($redirect);
    }
}