@extends('layouts.layout')
@section('content')
<div class="row">
    @if(session('msg'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{session('msg')}}
      </div>
    @endif
    <div class="txt-center">
        <h1>REGISTER HERE</h1>
    </div>
    <form action="{{route('register-user')}}" method="POST">
        @csrf

        <div class="col">
            <div class="col-2">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Your Name..." name="name" value="{{old('name')}}">
            </div>
            <span class="text-danger">{{$errors->first('name')}}</span>
            <div class="col-2">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter Your Email..." name="email" value="{{old('email')}}">
            </div>
            <span class="text-danger">{{$errors->first('email')}}</span>
            <div class="col-2">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Your Password..." name="password" value="{{old('password')}}">
            </div>
            <span class="text-danger">{{$errors->first('password')}}</span>
            
            <div class="col-2">
                <label for="password">Confirm Password</label>
                <input type="password" placeholder="Enter Again Password..." name="confirm_password">
            </div>
            <span class="text-danger">{{$errors->first('confirm_password')}}</span>

        </div>
        <div class="btn">
            <button type="submit">Register</button>
            <button type="reset">Clear</button>
        </div>
        <div class="footer-txt">
            <span>are you already Registered?</span><a href="{{route('login')}}">Login Here</a>
        </div>
    </form>
</div>
@endsection