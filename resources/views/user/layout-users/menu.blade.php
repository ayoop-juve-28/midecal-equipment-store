<ul class="pc-navbar">
    <li class="pc-item pc-caption">
        <label class="text-primary fw-bold mb-2">متجر المعدات الطبية</label>
        <i class="fas fa-medkit text-primary"></i>
    </li>

    <li class="pc-item">
        <a href="#" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-home text-primary"></i>
            </span>
            <span class="pc-mtext">الرئيسية</span>
        </a>
    </li>

    <li class="pc-item pc-hasmenu">
        <a href="#!" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-procedures text-primary"></i>
            </span>
            <span class="pc-mtext">المعدات الطبية</span>
            <span class="pc-arrow">
                <i class="fas fa-chevron-down fa-sm"></i>
            </span>
        </a>
        <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">جميع المنتجات</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">الأجهزة الطبية</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">الأدوات الجراحية</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">مستلزمات التمريض</a></li>
        </ul>
    </li>

    <li class="pc-item">
        <a href="#" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-percentage text-primary"></i>
            </span>
            <span class="pc-mtext">العروض والتخفيضات</span>
            <span class="badge bg-accent text-primary ms-auto">جديد</span>
        </a>
    </li>

    <li class="pc-item pc-hasmenu">
        <a href="#!" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-shopping-cart text-primary"></i>
            </span>
            <span class="pc-mtext">طلباتي</span>
            <span class="pc-arrow">
                <i class="fas fa-chevron-down fa-sm"></i>
            </span>
        </a>
        <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">طلباتي الحالية</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">طلباتي السابقة</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">طلباتي الملغاة</a></li>
        </ul>
    </li>

    <li class="pc-item">
        <a href="#" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-heart text-primary"></i>
            </span>
            <span class="pc-mtext">قائمة المفضلة</span>
            <span class="badge bg-accent text-primary ms-auto">3</span>
        </a>
    </li>

    <li class="pc-item">
        <a href="#" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-map-marker-alt text-primary"></i>
            </span>
            <span class="pc-mtext">عناوين التوصيل</span>
        </a>
    </li>

    <li class="pc-item pc-hasmenu">
        <a href="#!" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-user-circle text-primary"></i>
            </span>
            <span class="pc-mtext">حسابي</span>
            <span class="pc-arrow">
                <i class="fas fa-chevron-down fa-sm"></i>
            </span>
        </a>
        <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">الملف الشخصي</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">تغيير كلمة المرور</a></li>
            <li class="pc-item"><a class="pc-link rounded-lg" href="#">إعدادات الحساب</a></li>
        </ul>
    </li>

    <li class="pc-item">
        <a href="#" class="pc-link rounded-lg">
            <span class="pc-micon">
                <i class="fas fa-headset text-primary"></i>
            </span>
            <span class="pc-mtext">الدعم الفني</span>
        </a>
    </li>
</ul>

<script>
    // تهيئة القائمة وتحديد العناصر النشطة
    $(document).ready(function() {
        // فتح/إغلاق القوائم الفرعية
        $('.pc-hasmenu > a').on('click', function(e) {
            e.preventDefault();
            const parent = $(this).parent('.pc-hasmenu');

            if (parent.hasClass('active')) {
                // إغلاق القائمة إذا كانت مفتوحة
                parent.removeClass('active');
                parent.find('.pc-submenu').slideUp(300);
                parent.find('.pc-arrow i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            } else {
                // إغلاق القوائم الأخرى المفتوحة
                $('.pc-hasmenu.active .pc-submenu').slideUp(300);
                $('.pc-hasmenu.active .pc-arrow i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                $('.pc-hasmenu').removeClass('active');

                // فتح القائمة المحددة
                parent.addClass('active');
                parent.find('.pc-submenu').slideDown(300);
                parent.find('.pc-arrow i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            }
        });

        // تحديد العنصر النشط حسب الصفحة الحالية
        const currentPath = window.location.pathname;
        $('.pc-navbar .pc-link').each(function() {
            const linkPath = $(this).attr('href');
            if (linkPath && currentPath.includes(linkPath) && linkPath !== '#') {
                $(this).addClass('active');
                $(this).parents('.pc-hasmenu').addClass('active');
                $(this).parents('.pc-submenu').show();
            }
        });
    });
</script>
