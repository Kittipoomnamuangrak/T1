@extends('master')

@section('title', 'Content CRUD')

@section('content')

    <h1 style="text-align:" >Welcome to my Shop</h1>
    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="{{ url('')}}" role="button" class="btn btn-sm btn-info">Main Menu</a>
    </div>
    <div>
        <form action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
        </form>
    </div>
</div>

