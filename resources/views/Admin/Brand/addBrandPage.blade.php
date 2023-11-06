@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1>addBrandPage</h1>
            <form action="{{ route('addBrandData') }}" method="POST">
                @csrf
                <label for="brand_name">Brand Name</label>
                <input type="text" name="brand_name" id="name">
                <input type="submit" value="Add Brand">
            </form>
        </div><!-- /.container-fluid -->
    </section>
@endsection
