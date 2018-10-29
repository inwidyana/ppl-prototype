<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DontforgetController extends Controller
{
    public function create(Request $request) {
        return view('dontforget.create');
    }

    public function store(Request $request) {
        return view('');
    }
}
