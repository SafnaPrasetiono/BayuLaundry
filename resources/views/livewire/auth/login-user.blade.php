<div>
    <div class="login-container">
        <div class="login-head">
            <div class="text-start">
                <h2>LOGIN</h2>
                <p class="mb-0">Wellcome in login form</p>
            </div>
        </div>
        <div class="login-body">
            <form wire:submit="login" >
                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" wire:model='email' class="form-control @error('email') is-invalid @enderror" id="email" wire:target='login' wire:loading.class="disabled placeholder">
                     @error('email')
                        <span class="invalid-feedback text-capitalize">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" wire:model='password' class="form-control @error('password') is-invalid @enderror" id="password" wire:target='login' wire:loading.class="disabled placeholder">
                    @error('password')
                        <span class="invalid-feedback text-capitalize">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary form-control" wire:target='login' wire:loading.class="disabled placeholder">LOGIN</button>
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


    <script>
        window.addEventListener('error', (event) => {
            Swal.fire({
                title: "LOGIN",
                text: this.event.detail,
                icon: "info",
                showConfirmButton: false,
                timer: 2500
            });
        })
    </script>
</div>
