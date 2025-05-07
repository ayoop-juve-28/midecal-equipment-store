@extends('admin.layout-admin.master')

@section('title', 'إضافة موظف')

@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <h2 class="mb-4">إضافة موظف جديد</h2>
        </div>

        @include('admin.layout-admin.validation-messages')

        <form action="{{ route('Employee_store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>الاسم</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>كلمة المرور</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>الحالة</label>
                <select name="is_active" class="form-control" required>
                    <option value="1">مفعل</option>
                    <option value="0">غير مفعل</option>
                </select>
            </div>

            <div class="mb-3">
                <label>الدور</label>
                <select name="role" class="form-control" required>
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">إضافة</button>
        </form>
    </div>
</section>
@endsection
