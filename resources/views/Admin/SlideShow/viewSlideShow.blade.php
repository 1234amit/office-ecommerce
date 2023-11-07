@extends('Admin.admin_master')
@section('content')
    <section class="view-category">
        <div class="container">
            <div class="main-content">
                <h1>View Slide Show</h1>

                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Sl</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $key => $slider)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $slider->image }}</td>
                                <td>{{ $slider->type }}</td>
                                <td>{{ $slider->status }}</td>
                                <td>
                                    <a href="{{ route('slider.delete', $slider->id) }}" class="btn btn-sm btn-danger"
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
