<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('user.login.style_login')
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="#">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>or login with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form method="POST" action="{{ route('register') }}">@csrf
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="name" required class="@error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback" style="color: red; font-size: 0.8rem; margin-top: 5px;">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="email" placeholder="Email" name="email" required class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback" style="color: red; font-size: 0.8rem; margin-top: 5px;">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback" style="color: red; font-size: 0.8rem; margin-top: 5px;">
                        {{ $message }}
                    </div>
                    @enderror

                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
    @include('user.login.script')
</body>
</html>
