@extends('admin.layout-admin.master')

@section('title', 'تعديل موظف')

@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('show_employee') }}">الموظفين</a></li>
                            <li class="breadcrumb-item active">تعديل موظف</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">تعديل بيانات الموظف</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layout-admin.validation-messages')

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">نموذج تعديل الموظف</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Employee_update', $admin->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">الاسم</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">كلمة المرور <small class="text-muted">(اتركها فارغة إن لم ترد التغيير)</small></label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">الحالة</label>
                                <select name="is_active" class="form-select">
                                    <option value="1" {{ $admin->is_active ? 'selected' : '' }}>مفعل</option>
                                    <option value="0" {{ !$admin->is_active ? 'selected' : '' }}>غير مفعل</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">الدور</label>
                                <select name="role" class="form-select" required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}" {{ $currentRole == $role->name ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">حفظ التعديلات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
