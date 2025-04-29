<div class="card pc-admin-card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <i class="fas fa-user-shield fa-2x text-primary"></i>
            </div>
            <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-0">مدير النظام</h6>
                <small>الإدارة العامة للمنصة</small>
            </div>
            <a class="btn btn-icon btn-link-secondary avtar-s" data-bs-toggle="collapse" href="#pc_sidebar_adminlinks">
                <i class="fas fa-ellipsis-v"></i>
            </a>
        </div>
        <div class="collapse pc-admin-links" id="pc_sidebar_adminlinks">
            <div class="pt-3">
                <a href="#" class="d-block py-2">
                    <i class="fas fa-users-cog me-2"></i>
                    إدارة الموظفين
                </a>
                <a href="#" class="d-block py-2">
                    <i class="fas fa-chart-pie me-2"></i>
                    الإحصائيات
                </a>
                <a href="#" class="d-block py-2">
                    <i class="fas fa-cogs me-2"></i>
                    إعدادات النظام
                </a>
                <hr class="my-2">
                <a href="#" class="d-block py-2 text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    تسجيل الخروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
