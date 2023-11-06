@extends('Admin.admin_master')
@section('content')
    <h1>addCategoryPage</h1>
    <form action="{{ route('addCategoryData') }}" method="POST">
        @csrf
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name" id="name">
        <input type="submit" value="Add Category">
    </form>
@endsection
