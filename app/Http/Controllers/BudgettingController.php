<?php

namespace App\Http\Controllers;

use App\Budget;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function create(Request $request) {
        return view('budget.create');
    }

    public function store(Request $request) {
        $user = User::find(Auth::id());
        $user->budget_by = $request->budgetBy;

        $budget = new Budget();
        $budget->budget_by = $request->budgetBy;
        $budget->ammount_by_specified = $request->budget;

        $user->budget()->save($budget);

        return redirect('category');
    }
}