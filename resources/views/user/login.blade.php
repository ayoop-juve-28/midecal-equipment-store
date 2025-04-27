@extends('user.login.login')

@section('title')
<title>Login&Register</title>
@endsection

@section('message')
<div class="notification-system">
    @if(session('success'))
        <div class="notification success">
            <i class='bx bx-check-circle'></i>
            <span>{{ session('success') }}</span>
            <button class="close-notification"><i class='bx bx-x'></i></button>
        </div>
    @endif

    @if(session('error'))
        <div class="notification error">
            <i class='bx bx-error-circle'></i>
            <span>{{ session('error') }}</span>
            <button class="close-notification"><i class='bx bx-x'></i></button>
        </div>
    @endif

    @if($errors->any())
        <div class="notification error">
            <i class='bx bx-error-circle'></i>
            <div class="error-list">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
            <button class="close-notification"><i class='bx bx-x'></i></button>
        </div>
    @endif
</div>
@endsection


