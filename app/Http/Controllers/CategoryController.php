<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create(Request $request) {
        return view('category.create');
    }

    public function wouldyou(Request $request) {
        return view('wouldyou.create');
    }

    public function dontforget(Request $request) {
        return view('dontforget.create');
    }

    public function store(Request $request) {
        $user = User::find(Auth::id());

        $categories = $request->all();
        $i = 0;
        foreach ($categories as $category) {
            if($i > 0) {
                $newCategory = new Category();
                $newCategory->name = $category;
                $user->categories()->save($newCategory);
            }
            $i++;
        }
        return redirect('spending');
    }

    public function budget() {
        $categories = Category::where('user_id', Auth::id())->get();
        return view('category.budget', ['categories' => $categories]);
    }

    public function budgetStore(Request $request) {
        $categories = Category::all();
        foreach ($categories as $category) {
            $category->budget_by = $request->input('category' . $category->id . 'radio');
            $category->ammount_by_specified = $request->input('category' . $category->id);
            $category->save();
        }
        return redirect('profile');
    }
}
