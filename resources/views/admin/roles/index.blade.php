@extends('admin.layout-admin.master')

@section('title', 'إدارة الصلاحيات')

@section('style')

<!-- DataTables CSS from CDN -->

@include('admin.roles.styleDataTable')

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
                            <li class="breadcrumb-item"><a href="{{ route('show_role_page') }}">الصلاحيات</a></li>
                            <li class="breadcrumb-item" aria-current="page">القائمة</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">الصلاحيات</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layout-admin.validation-messages')

        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    @if (auth('admin')->user()->can('add role'))

                    <div class="card-header d-flex justify-content-end">
                        <a class="btn btn-success" href="{{ route('show_create_role_page') }}">+ إضافة صلاحية جديدة</a>
                    </div>

                    @endif


                    <div class="card-body">
                        <h5 class="mb-3">قائمة الصلاحيات</h5>
                        <div class="dt-responsive">
                            <table id="rolesTable" class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>اسم الصلاحية</th>
                                        <th>الصلاحيات</th>
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
@include('admin.roles.scriptDataTable')
@endsection
