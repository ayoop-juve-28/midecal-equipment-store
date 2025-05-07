@extends('admin.layout-admin.master')

@section('title', 'إضافة صلاحية جديدة')

@section('content')
<section class="pc-container">
    <div class="pc-content">
        @include('admin.layout-admin.validation-messages')
        <div class="page-header">
            <div class="page-block">
                <h2 class="mb-3">إضافة صلاحية جديدة</h2>
            </div>
        </div>


        <form method="POST" action="{{ route('store_role') }}">@csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم الصلاحية</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">اختر الصلاحيات</label>
                <div class="row">
                    @foreach($permissions as $permission)
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}">
                                <label class="form-check-label">{{ $permission->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="{{ route('show_role_page') }}" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
</section>
@endsection
