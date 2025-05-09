@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <a href="/logout" class="logout">Logout</a>
    <h1>Dashboard</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="container">
        <h2>Welcome, {{ Auth::user()->name }}!</h2>
        <p>You are logged in with email: {{ Auth::user()->email }}</p>
        <p>Your account was created on: {{ Auth::user()->created_at->format('F j, Y, g:i a') }}</p>
    </div>
    
    <div class="container">
        <h3>User Profile</h3>
        <p>This is a simple dashboard showcasing that you're successfully authenticated and your data is being retrieved securely using Laravel's authentication system.</p>
        <p>In a real application, you might see more features here like:</p>
        <ul>
            <li>User profile management</li>
            <li>Account settings</li>
            <li>Application features</li>
        </ul>
    </div>
@endsection