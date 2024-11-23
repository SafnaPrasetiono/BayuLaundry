@extends('auth.panel')

@section('head')
    <title>laundryku - Login your account</title>
@endsection

@section('body')
<div class="login-container">
    <div class="login-head">
        <div class="text-start">
            <h2>SIGNUP</h2>
            <p class="mb-0">Wellcome in register form</p>
        </div>
    </div>
    <div class="login-body">
        <form>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-2">
                <label for="ConfirmPassword" class="form-label">Comfirmed Password</label>
                <input type="password" class="form-control" id="ConfirmPassword">
            </div>
            <button type="submit" class="btn btn-primary form-control">LOGIN</button>
        </form>
    </div>
    <div class="login-footer">
        <div class="d-block text-center">
            <p class="mb-0">Have a your account click here</p>
            <a href="{{ route('login') }}" style="text-decoration: none;">LOGIN</a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection