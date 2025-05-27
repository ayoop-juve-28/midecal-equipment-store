<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @yield('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @include('user.login.style_login')
</head>
<body>
    <!-- شاشة التحميل -->
    <div id="loading-overlay">
        <img src="{{ asset('assets/images/logomedeca2.png') }}" width="90" alt="شعار المتجر" class="img-fluid spinner">
    </div>

    <!-- نظام الإشعارات -->
    <div class="notification-system">
        @if ($errors->any())
            <div class="notification error">
                <i class="fas fa-exclamation-circle"></i>
                <div class="error-list">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                    @endforeach
                </div>
                <button class="close-notification">&times;</button>
            </div>
        @endif

        @if(session('error'))
            <div class="notification error">
                <i class="fas fa-exclamation-circle"></i>
                <span>{{ session('error') }}</span>
                <button class="close-notification">&times;</button>
            </div>
        @endif

        @if(session('success'))
            <div class="notification success">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
                <button class="close-notification">&times;</button>
            </div>
        @endif
    </div>

    <div class="container">
        <!-- نموذج تسجيل الدخول -->
        <div class="form-box login">
            <form action="{{ route('Login') }}" method="POST">@csrf
                <h1>تسجيل الدخول</h1>
                <div class="input-box">
                    <input type="email" placeholder="البريد الإلكتروني" name="email" required class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='fas fa-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="كلمة المرور" name="password" value="{{ old('password') }}" required class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='fas fa-lock'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">نسيت كلمة المرور؟</a>
                </div>
                <button type="submit" class="btn">تسجيل الدخول</button>
                <p>أو سجل دخول عبر منصات التواصل</p>
                <div class="social-icons">
                    <a href="#"><i class='fab fa-google'></i></a>
                    <a href="#"><i class='fab fa-facebook-f'></i></a>
                    <a href="#"><i class='fab fa-github'></i></a>
                    <a href="#"><i class='fab fa-linkedin-in'></i></a>
                </div>
            </form>
        </div>

        <!-- نموذج إنشاء حساب -->
        <div class="form-box register">
            <form method="POST" action="{{ route('register') }}">@csrf
                <h1>إنشاء حساب جديد</h1>
                <div class="input-box">
                    <input type="text" placeholder="اسم المستخدم" name="name" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='fas fa-user'></i>
                </div>

                <div class="input-box">
                    <input type="email" placeholder="البريد الإلكتروني" name="email" value="{{ old('email') }}" required class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='fas fa-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="كلمة المرور" name="password" required class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <i class='fas fa-lock'></i>
                </div>
                <button type="submit" class="btn">إنشاء حساب</button>
                <p>أو سجل عبر منصات التواصل</p>
                <div class="social-icons">
                    <a href="#"><i class='fab fa-google'></i></a>
                    <a href="#"><i class='fab fa-facebook-f'></i></a>
                    <a href="#"><i class='fab fa-github'></i></a>
                    <a href="#"><i class='fab fa-linkedin-in'></i></a>
                </div>
            </form>
        </div>

        <!-- منطقة التبديل -->
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>مرحباً بك!</h1>
                <p>قم بإنشاء حساب للوصول إلى كافة الخدمات</p>
                <button class="btn register-btn">إنشاء حساب</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>مرحباً بعودتك!</h1>
                <p>سجل دخولك للوصول إلى حسابك الشخصي</p>
                <button class="btn login-btn">تسجيل الدخول</button>
            </div>
        </div>
    </div>

    <!-- زر تبديل الوضع المظلم -->
    <button id="darkModeToggle" class="dark-mode-toggle">
        <i class="fas fa-moon"></i>
    </button>

    @include('user.login.script')
</body>
</html>
