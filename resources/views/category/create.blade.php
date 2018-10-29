@extends('layouts.navbar')

@section('content')
<script src="{{ asset('js/custom.js') }}"></script>
<div class="container">
    <div class="row">
        <h1>Choose Categories to Allocate your Budget</h1>
    </div>
    <div class="row" id="toBeAdded">
        <div class="col">
            <form method="POST" action="{{ route('category.store') }}" id="categoryForm">
                @csrf
                <button type="submit">Submit</button>
            </form>
            <button onclick="addCategory()">Test</button>
        </div>
    </div>
</div>
@endsection