@extends('Admin.admin_master')
@section('content')
    <div class="container">
        <div class="main-content">
            <h1>Contact Details</h1>
            <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th class="text-center">Sl</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Message</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $contact)
                        <tr class="text-center">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-sm btn-danger"
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
@endsection
