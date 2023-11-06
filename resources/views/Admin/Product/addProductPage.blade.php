@extends('Admin.admin_master')
@section('content')
    <section class="content">
        <div class="container" style="width: 80%">
            {{-- <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled></option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="container">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger m-2">{{ $error }}</div>
                    @endforeach
                @endif
                <h1>Add Product Page</h1>
                <form action="{{ route('addProductData') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category</label>
                        <select class="form-control" name="category_name">
                            @foreach ($category as $item)
                                <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="brand_name" class="form-label">Brand</label>
                        <select class="form-control" name="brand_name">
                            @foreach ($brand as $item)
                                <option value="{{ $item->brand_name }}">{{ $item->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type">
                            <option value="boy">Boy</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" cols="30" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>

                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount</label>
                        <input type="number" class="form-control" name="discount" id="discount">
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Images</label>
                        <input type="file" class="form-control" name="images[]" id="images" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div><!-- /.container -->
        </div>
    </section>
@endsection
