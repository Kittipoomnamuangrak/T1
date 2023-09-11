@extends('master')

@section('title', 'Content CRUD')

@section('content')

    <h1 style="text-align:center" >Welcome to my Shop</h1>
    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <p style="align-items: center">
        <a href="{{ url('')}}" role="button" class="btn btn-sm btn-info">Main Menu</a>
    </div>
    <div>
        <form action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
        </form>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <a class="btn btn-primary mb-3" href="{{route ('products.create')}}">สร้างสินค้า</a>
                <div class="row">
                    <div class="col-4">
                        Product 1
                    </div>
                    <div class="col-4">
                        Product 2
                    </div>
                    <div class="col-4">
                        Product 3
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

