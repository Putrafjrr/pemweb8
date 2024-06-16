@extends('layouts.app')

@section('title', 'Employees List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Employees List</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection