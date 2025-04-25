@extends('admin.layout-admin.master')

@section('title')

<title>admin</title>

@endsection
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                                <li class="breadcrumb-item active">الرئيسية</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">الرئيسية</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            @include('admin.layout-admin.validation-messages')

            <!-- [ Main Content ] start -->

            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
