<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary">
                <i class="fas fa-user-shield"></i>
                <span class="ms-2">إدارة المنصة</span>
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-admin-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-user-shield fa-2x text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::guard('admin')->user()->name }}</h6>
                            <small>الإدارة العامة</small>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>القائمة الرئيسية</label>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="pc-mtext">لوحة التحكم</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-users-cog"></i></span>
                        <span class="pc-mtext">إدارة الموظفين</span>
                        <span class="pc-arrow"><i class="fas fa-chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#">قائمة الموظفين</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">إضافة موظف</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">الصلاحيات</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-building"></i></span>
                        <span class="pc-mtext">طلبات الشركات</span>
                        <span class="pc-arrow"><i class="fas fa-chevron-right"></i></span>
                        <span class="pc-badge bg-warning">5</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#">طلبات جديدة</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">مقبولة</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">مرفوضة</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-comments"></i></span>
                        <span class="pc-mtext">إدارة الشكاوى</span>
                        <span class="pc-arrow"><i class="fas fa-chevron-right"></i></span>
                        <span class="pc-badge bg-danger">3</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#">شكاوى جديدة</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">مغلقة</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">التقارير</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

