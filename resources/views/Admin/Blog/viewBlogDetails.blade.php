@extends('Admin.admin_master')
@section('content')
    <section class="view-category">
        <div class="container">
            <div class="main-content">
                <h1>View Blog Details</h1>

                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Sl</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Cotnent</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $blog)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->image }}</td>
                                <td>{{ $blog->content }}</td>
                                <td>{{ $blog->author }}</td>
                                <td>{{ $blog->status }}</td>
                                <td>
                                    <a href="{{ route('blog.delete', $blog->id) }}" class="btn btn-sm btn-danger"
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
