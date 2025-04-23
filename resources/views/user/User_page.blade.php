@extends('user.layout-users.master')

@section('title')
    <title>الرئيسية</title>
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

            @include('user.layout-users.validation-messages')

            <!-- [ Main Content ] start -->
            <div class="container mt-4">
                <div class="row">
                    @for ($i = 0; $i < 8; $i++) <!-- عدد البطاقات -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            @include('user.layout-users.card')
                        </div>
                    @endfor
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
