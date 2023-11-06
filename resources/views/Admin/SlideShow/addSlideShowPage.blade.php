{{-- @extends('Admin.admin_master')
@section('content')
    <section class="content">
        <h1>Add Slider</h1>
        <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="m-2 rounded-lg bg-red-500 p-3 text-center">{{ $error }}</div>
                    <br>
                @endforeach
            @endif
            <form action="{{ route('addSlideShowData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Type</label>
                <select name="type" id="">
                    <option value="home">Home</option>
                    <option value="offer">Offer</option>
                </select>
                <br>
                <br>
                <label for="">Image</label>
                <input type="file" name="image" id="" />
                <input type="submit" value="Submit">
            </form>

        </div><!-- /.container-fluid -->
    </section>
@endsection --}}

@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container" style="width: 80%">
            <h1 class="mb-4">Add Slider</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mb-4">{{ $error }}</div>
                @endforeach
            @endif
            <form action="{{ route('addSlideShowData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" name="type" id="type">
                        <option value="home">Home</option>
                        <option value="offer">Offer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div><!-- /.container -->
    </section>
@endsection
