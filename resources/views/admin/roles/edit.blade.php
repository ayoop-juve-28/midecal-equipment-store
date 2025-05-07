@extends('admin.layout-admin.master')

@section('title', 'تعديل الصلاحية')

@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <h2 class="mb-3">تعديل الصلاحية: {{ $role->name }}</h2>
            </div>
        </div>

        {{-- ✅ نموذج التحديث --}}
        <form method="POST"  action="{{ route('update_role', $role->id) }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم الصلاحية</label>
                <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">الصلاحيات</label>
                <div class="row">
                    @foreach($permissions as $permission)
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                @if($role->permissions->contains($permission->id)) checked @endif>
                                <label class="form-check-label">{{ $permission->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">تحديث</button>
            <a href="{{ route('show_role_page') }}" class="btn btn-secondary">إلغاء</a>
        </form>


    </div>
</section>
@endsection
