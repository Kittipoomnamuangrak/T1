@extends('master')

@section('title', 'Login Page')
@section('content')


<body style="background-color: #ffffff; background-image: url('https://media.istockphoto.com/id/471006158/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A8%E0%B8%B4%E0%B8%A5%E0%B8%9B%E0%B8%B0%E0%B8%97%E0%B8%B2%E0%B8%AA%E0%B8%B5%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%9C%E0%B8%B4%E0%B8%A7%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87.jpg?s=612x612&w=0&k=20&c=w61ePZXbfHkzsMFvgbWLJYHySv0IDoAxba73P237KxM='); background-size: cover; background-repeat: no-repeat; background-position: center background-attachment:fixed ">

<style>
    .center-button {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
}

   .custom-button {
        background-color: #14f100;
        color: #000000;
        border: none;
        border-radius: 100px;
        padding: 50px 75px;
        font-size: 25px;
        cursor: pointer;
}
    .custom-button:hover {
        background-color: #8eb5b8;
}

</style>


<div class="center-button">
    <a href="{{url ('products')}}">
    <button class="custom-button">เข้าสู่ระบบ</button>
</a>
</div>

@endsection
