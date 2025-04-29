<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header class="pc-header">
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link arrow-none m-0 trig-drp-search" href="#">
                        <i class="fas fa-chart-line"></i>
                        <span class="badge bg-info pc-h-badge">15</span>
                    </a>
                </li>
            </ul>
        </div>

        <ul class="list-unstyled ms-auto">
            <li class="dropdown pc-h-item">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <i class="fas fa-bell"></i>
                    <span class="badge bg-warning pc-h-badge">5</span>
                </a>
                <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">تنبيهات النظام</h5>
                    </div>
                    <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                        <p class="text-span">آخر التنبيهات</p>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-building text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="float-end text-sm text-muted">منذ 10 دقائق</span>
                                        <h5 class="text-body mb-2">طلب انضمام شركة جديدة</h5>
                                        <p class="mb-2">شركة ABC الطبية تطلب الانضمام</p>
                                        <a href="#" class="btn btn-sm btn-primary">مراجعة الطلب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-2">
                        <a href="#" class="link-primary">عرض كل التنبيهات</a>
                    </div>
                </div>
            </li>

            <li class="dropdown pc-h-item header-user-profile">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <i class="fas fa-user-shield"></i>
                </a>
                <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">إدارة النظام</h5>
                    </div>
                    <div class="dropdown-body">
                        <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-user-cog fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">مدير النظام</h6>
                                    <span></span>
                                </div>
                            </div>
                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <a href="#" class="text-center">
                                    <i class="fas fa-users-cog me-2"></i>إدارة الموظفين
                                </a>
                            </div>
                            <hr class="border-secondary border-opacity-50" />
                            <form action="{{ route('logout') }}" method="POST">@csrf
                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-sign-out-alt me-2"></i>تسجيل الخروج
                                    </button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>


