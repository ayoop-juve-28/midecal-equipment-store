<div class="card pc-user-card glass-effect border-0 mb-4">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="user-avtar wid-45 rounded-circle border border-2 border-primary shadow" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-1 text-primary fw-bold">مرحباً بك</h6>
                <small class="text-muted">{{ Auth::guard('web')->user()->name }}</small>
            </div>
            <button class="btn btn-icon btn-light rounded-circle" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                <i class="fas fa-ellipsis-v text-primary"></i>
            </button>
        </div>

        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
            <div class="pt-3">
                <a href="#" class="d-flex align-items-center py-2 px-3 rounded-lg mb-2 text-primary hover-bg-light">
                    <i class="fas fa-user-circle me-2"></i>
                    <span>حسابي</span>
                </a>

                <a href="#" class="d-flex align-items-center py-2 px-3 rounded-lg mb-2 text-primary hover-bg-light">
                    <i class="fas fa-cog me-2"></i>
                    <span>الإعدادات</span>
                </a>

                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="d-flex align-items-center py-2 px-3 rounded-lg text-primary hover-bg-light">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    <span>تسجيل الخروج</span>
                </a>

                <form id="logout-form" action="{{ Route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-bg-light:hover {
        background-color: rgba(109, 40, 217, 0.1);
    }

    /* تأثير انتقالي عند فتح/إغلاق القائمة */
    #pc_sidebar_userlink {
        transition: max-height 0.3s ease;
        overflow: hidden;
    }

    /* إضافة ظل للصورة عند التحويم */
    .user-avtar:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
</style>

<script>
    $(document).ready(function() {
        // تبديل أيقونة النقاط الثلاث عند فتح/إغلاق القائمة
        $('[data-bs-toggle="collapse"]').on('click', function() {
            const target = $($(this).attr('href'));
            if (target.hasClass('show')) {
                $(this).find('i').removeClass('fa-times').addClass('fa-ellipsis-v');
            } else {
                $(this).find('i').removeClass('fa-ellipsis-v').addClass('fa-times');
            }
        });
    });
</script>
