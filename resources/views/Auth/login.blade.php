@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="txt-center">
        <h1>LOGIN HERE</h1>
    </div>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="col">
            <div class="col-2">
                <label for="email">Email</label>
                <input type="email" placeholder="Enter Your Email..." name="email">
            </div>
            <span class="text-danger">{{$errors->first('email')}}</span>
            <div class="col-2">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Your Password..." name="password">
            </div>
            
            <span class="text-danger">{{$errors->first('password')}}</span>

        </div>
        <div class="btn">
            <button type="submit">Login</button>
            <button type="reset">Clear</button>
        </div>
        <div class="footer-txt">
            <span>are you already Registered?</span><a href="{{route('register')}}">Register Here</a>
        </div>
    </form>
</div>
@endsection