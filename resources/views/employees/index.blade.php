@extends('layouts.navigation')

@section('title', 'Employees List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Employees List</h1>
        @if(auth()->user()->role == 'admin')
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        @endif
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="text-center">
                    <img src="{{ asset('images/' . $employee->photo) }}" alt="Employee Photo" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        @if(auth()->user()->role == 'admin')
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @else
                            <span>No Actions Available</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
