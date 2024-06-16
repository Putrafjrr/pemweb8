@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Employee Management System</h1>
        <p class="lead">Manage your employees efficiently and effectively.</p>
        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg">View Employees</a>
    </div>
@endsection
