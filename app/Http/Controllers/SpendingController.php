<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpendingController extends Controller
{
    public function create(Request $request) {
        $categories = Category::where('user_id', Auth::id())->get();
        return view('spending.create', ['categories' => $categories]);
    }

    public function store(Request $request) {

    }
}
