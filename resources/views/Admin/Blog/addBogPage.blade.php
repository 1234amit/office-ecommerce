{{-- @extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1>Add Blog</h1>
            <form action="{{ route('addBlogData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Title</label>
                <input type="text" name="title" id="">
                <br>
                <br>
                <label for="">Content</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
                <br>
                <br>
                <label for="">Image</label>
                <input type="file" name="image" id="">
                <br>
                <br>
                <input type="submit" value="Submit">
            </form>

        </div>
    </section>
@endsection --}}

@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container-fluid" style="width: 80%">
            <h1>Add Blog</h1>
            <form action="{{ route('addBlogData') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="6"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
