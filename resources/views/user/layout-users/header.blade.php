<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header class="pc-header">
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link arrow-none m-0 trig-drp-search" href="#">
                        <i class="fas fa-ticket"></i>
                        <span class="badge bg-success pc-h-badge">3</span>
                    </a>
                </li>
            </ul>
        </div>

        <ul class="list-unstyled ms-auto">
            <li class="dropdown pc-h-item">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <svg class="pc-icon"><use xlink:href="#custom-notification"></use></svg>
                    <span class="badge bg-success pc-h-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">الاشـعـارات الواردة</h5>
                    </div>
                    <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                        <p class="text-span">أخر الاشـعـارات</p>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg class="pc-icon text-primary"><use xlink:href="#custom-message-2"></use></svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="float-end text-sm text-muted">منذ دقيقة</span>
                                        <h5 class="text-body mb-2">عنوان الإشعار</h5>
                                        <p class="mb-2">وصف الإشعار هنا</p>
                                        <a href=".returnOrder" data-bs-toggle="modal" class="btn btn-sm btn-primary" onclick="showAdImage()">عرض صورة التعميم</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-2">
                        <a href="#" class="link-primary">عرض كل الاشـعـارات</a>
                    </div>
                </div>
            </li>

            <li class="dropdown pc-h-item header-user-profile">
                <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                    <img src="https://via.placeholder.com/40" alt="user-image" class="user-avtar" />
                </a>
                <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">الملف الشخصي</h5>
                    </div>
                    <div class="dropdown-body">
                        <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0">
                                    <img src="https://via.placeholder.com/40" alt="user-image" class="user-avtar wid-35" />
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">اسم المستخدم</h6>
                                    <span>email@example.com</span>
                                </div>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3 ">
                                <!-- تقييم -->
                            <a class="text-center">    <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>    <i class="fa fa-star-half-alt text-warning"></i><i class="fa fa-star-o text-muted"></i></a>
                            </div>

                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <a class="text-center" style="color: grey;" href=".changePassword" data-bs-toggle="modal">تغيير كلمة المرور</a>
                            </div>
                            <hr class="border-secondary border-opacity-50" />
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary" onclick="alert('تسجيل الخروج')">
                                    <svg class="pc-icon me-2"><use xlink:href="#custom-logout-1-outline"></use></svg>تسجيل الخروج
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>

<!-- Modal لعرض صورة -->
<div class="modal fade returnOrder" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">صورة من التعميم</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="notificationImage" alt="img" class="img-fluid" style="display: none;" />
                <embed src="" id="notificationPdf" type="application/pdf" width="100%" height="600px" style="display: none;">
                <button type="button" class="btn btn-light mt-3" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal تغيير كلمة المرور -->
<div class="modal fade changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تغييــر كلمــة المــرور</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="changePasswordForm">
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور الحالية</label>
                        <input class="form-control" type="password" placeholder="كلمة المرور الحالية" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور الجديدة</label>
                        <input class="form-control" type="password" placeholder="كلمة المرور الجديدة" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">اعادة كلمة المرور الجديدة</label>
                        <input class="form-control" type="password" placeholder="اعادة كلمة المرور الجديدة" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-info">تغييــر</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغــلاق</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
