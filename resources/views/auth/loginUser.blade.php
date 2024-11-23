@extends('auth.panel')

@section('head')
    <title>laundryku - Login your account</title>
@endsection

@section('body')
<div class="login-container">
    <div class="login-head">
        <div class="text-start">
            <h2>LOGIN</h2>
            <p class="mb-0">Wellcome in login form</p>
        </div>
    </div>
    <div class="login-body">
        <form>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary form-control">LOGIN</button>
        </form>
    </div>
    <div class="login-footer">
        <div class="d-block">
            <p class="text-center">-- or --</p>
        </div>
        <ul class="nav justify-content-center mb-3">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ url('/images/icons/google.png') }}" alt="google" class="other-link-login">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook" class="other-link-login">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter" class="other-link-login">
                </a>
            </li>
        </ul>
        <div class="d-block text-center">
            <p class="mb-0">don't have account click here</p>
            <a href="{{ route('signup') }}" style="text-decoration: none;">SIGNUP</a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection