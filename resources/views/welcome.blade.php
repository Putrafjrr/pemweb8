@extends('layouts.navigation')

@section('title', 'Dashboard')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Employee Management System</h1>
        <p class="lead">Manage your employees efficiently and effectively.</p>
        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg">LOGIN</a>
    </div>
@endsection
