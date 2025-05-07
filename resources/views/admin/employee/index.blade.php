@extends('admin.layout-admin.master')

@section('title', 'إدارة الموظفين')

@section('style')
@include('admin.roles.styleDataTable') <!-- يمكنك إعادة استخدام نفس ملفات الـ style -->
@endsection

@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item">الموظفين</li>
                            <li class="breadcrumb-item active" aria-current="page">القائمة</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">قائمة الموظفين</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layout-admin.validation-messages')

        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <h5 class="mb-3">قائمة الموظفين</h5>
                        <div class="dt-responsive">
                            <table id="employeesTable" class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>الدور</th>
                                        <th>الحالة</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- سيتم تحميل البيانات عبر AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('script')
@include('admin.employee.script') <!-- أنشئ ملف scriptDataTable خاص بالموظفين -->
@endsection
