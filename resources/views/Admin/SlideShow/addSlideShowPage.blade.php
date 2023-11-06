@extends('Admin.admin_master')
@section('content')
    <section class="content">
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
@endsection
