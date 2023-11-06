@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container" style="width: 80%">
            <h1>Add Brand Page</h1>
            <form action="{{ route('addBrandData') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name">
                </div>

                <button type="submit" class="btn btn-primary">Add Brand</button>
            </form>
        </div><!-- /.container -->
    </section>
@endsection
