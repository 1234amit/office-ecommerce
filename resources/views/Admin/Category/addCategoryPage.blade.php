@extends('Admin.admin_master')
@section('content')
    <div class="container" style="width: 80%">
        <h1>Add Category Page</h1>
        <form action="{{ route('addCategoryData') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name">
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection
