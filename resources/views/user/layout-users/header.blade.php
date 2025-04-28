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
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge bg-success pc-h-badge">3</span>
                    </a>
                </li>
            </ul>
        </div>

        <ul class="list-unstyled ms-auto">
            <li class="dropdown pc-h-item">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <i class="fas fa-bell"></i>
                    <span class="badge bg-success pc-h-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">إشعارات المتجر</h5>
                    </div>
                    <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                        <p class="text-span">آخر الإشعارات</p>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-box-open text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="float-end text-sm text-muted">منذ دقيقة</span>
                                        <h5 class="text-body mb-2">طلبك قيد التجهيز</h5>
                                        <p class="mb-2">تم استلام طلبك وسيتم شحنه قريباً</p>
                                        <a href="#" class="btn btn-sm btn-primary">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-2">
                        <a href="#" class="link-primary">عرض كل الإشعارات</a>
                    </div>
                </div>
            </li>

            <li class="dropdown pc-h-item header-user-profile">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="user-avtar" />
                </a>
                <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">الملف الشخصي</h5>
                    </div>
                    <div class="dropdown-body">
                        <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0">
                                    <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="user-avtar wid-35" />
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">عميلنا العزيز</h6>
                                    <span>{{ Auth::guard('web')->user()->name }}</span>
                                </div>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <a href="#" class="text-center">
                                    <i class="fas fa-user-md me-2"></i>الملف الشخصي
                                </a>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <a href="#" class="text-center">
                                    <i class="fas fa-shopping-bag me-2"></i>طلباتي
                                </a>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                    <i class="fas fa-key me-2"></i>تغيير كلمة المرور
                                </a>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary" onclick="alert('تم تسجيل الخروج')">
                                    <i class="fas fa-sign-out-alt me-2"></i>تسجيل الخروج
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>

<!-- Modal تغيير كلمة المرور -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تغيير كلمة المرور</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور الحالية</label>
                        <input class="form-control" type="password" placeholder="أدخل كلمة المرور الحالية">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور الجديدة</label>
                        <input class="form-control" type="password" placeholder="أدخل كلمة المرور الجديدة">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">تأكيد كلمة المرور الجديدة</label>
                        <input class="form-control" type="password" placeholder="أعد إدخال كلمة المرور الجديدة">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary">حفظ التغييرات</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
