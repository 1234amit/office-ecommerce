@extends('Admin.admin_master')
@section('content')
    <section class="view-category">
        <div class="container">
            <div class="main-content">
                <h1>View Product Details</h1>

                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Sl</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Short-Description</th>
                            <th class="text-center">Description</th>
                            {{-- <th class="text-center">Category Id</th>
                            <th class="text-center">Brand Id</th> --}}
                            <th class="text-center">Type</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Discount</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->short_description }}</td>
                                <td>{{ $product->description }}</td>
                                {{-- <td>{{ $product->category_id }}</td>
                                <td>{{ $product->brand_id }}</td> --}}
                                <td>{{ $product->type }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->discount }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a href="{{ route('product.delete', $product->id) }}" class="btn btn-sm btn-danger"
                                        onclick="confirmation(event)">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
