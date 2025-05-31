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
            <form action="{{ route('signup.post') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username"
                        class="form-control @error('username') is-invalid @enderror">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror">
                </div>
                <div class="mb-4">
                    <label for="ConfirmPassword" class="form-label">Comfirmed Password</label>
                     <input type="password" name="password_confirmation" id="ConfirmPassword" class="form-control @error('password') is-invalid @enderror" required maxlength="255" minlength="8">
                </div>
                <button type="submit" class="btn btn-primary form-control">SIGNUP</button>
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
