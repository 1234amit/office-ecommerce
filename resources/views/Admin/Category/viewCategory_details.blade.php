@extends('Admin.admin_master')
@section('content')
    <section class="view-category">
        <div class="container">
            <div class="main-content">
                <h1>View Category Details</h1>

                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Sl</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorys as $key => $category)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <a href="{{ route('category.delete', $category->id) }}" class="btn btn-sm btn-danger"
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
