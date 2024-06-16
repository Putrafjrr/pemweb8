@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
    <h1>Edit Employee</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ $employee->position }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
