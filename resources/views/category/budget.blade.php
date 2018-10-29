@extends('layouts.navbar')

@section('content')
<h1>Budget each category</h1>
<form method="POST" action="{{ route('category.budget.store') }}">
    @csrf
    @foreach($categories as $category)
        <form method="POST" action="{{ route('budget.store') }}">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="{{ 'basic-addon' . $category->id }}">{{ $category->name }}</span>
                </div>
                <input type="text" name="{{ 'category' . $category->id }}" class="form-control" placeholder="" aria-describedby="{{ 'basic-addon' . $category->id }}">
            </div>
            Daily: <input type="radio" name="{{ 'category' . $category->id . 'radio' }}" value="1">
            Weekly: <input type="radio" name="{{ 'category' . $category->id . 'radio' }}" value="2">
            Monthly: <input type="radio" name="{{ 'category' . $category->id . 'radio' }}" value="3">
        </form>
    @endforeach
    <input type="submit">
</form>
@endsection