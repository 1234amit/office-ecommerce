@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container-fluid">
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
@endsection
