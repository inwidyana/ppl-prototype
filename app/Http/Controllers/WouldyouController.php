<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WouldyouController extends Controller
{
    public function create(Request $request) {
        return view('wouldyou.create');
    }
}
