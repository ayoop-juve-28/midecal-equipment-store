<!DOCTYPE html>
@if(session()->get('locale') == "en")
<html lang="en">
@else
<html lang="ar" dir="rtl">
@endif
<head>
    <title>@yield('title', 'متجر المعدات الطبية')</title>
    <!-- الميتا تاج -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="متجر متخصص للمعدات الطبية يوفر أحدث المنتجات بجودة عالية">
    <meta name="keywords" content="معدات طبية, أجهزة طبية, مستلزمات طبية">
    <meta name="author" content="متجر المعدات الطبية">

    <!-- ملفات الستايل -->
    @include('user.layout-users.style')
    @yield('style')
</head>

<body class="bg-light transition-colors duration-300">
    <!-- شاشة التحميل -->
    <div id="loading-overlay" class="transition-opacity duration-300">
        <img src="{{ asset('assets/images/logomedeca2.png') }}" width="90" alt="شعار المتجر" class="img-fluid spinner">
    </div>

    <!-- انميشن تحميل الصفحة -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- القائمة الجانبية -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header justify-content-center p-3">
                <a href="{{ url('/') }}" class="b-brand text-primary">
                    <img src="{{asset('assets/images/logomedeca2.png')}}" width="160" alt="شعار المتجر" class="img-fluid" />
                </a>
            </div>
            <div class="navbar-content">
                @include('user.layout-users.navbar_profile')
                @include('user.layout-users.menu')
            </div>
        </div>
    </nav>

    <!-- الهيدر -->
    @include('user.layout-users.header')

    <!-- المحتوى الرئيسي -->
    <div class="pc-container">
        <div class="pc-content p-4">
            @include('user.layout-users.validation-messages')

            <!-- يتم وضع محتوى الصفحة هنا -->
            @yield('content')
        </div>
    </div>

    <!-- الفوتر -->
    @include('user.layout-users.footer')

    <!-- زر العودة للأعلى -->
    <button id="back-to-top" class="shadow-lg">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- السكريبتات -->
    @include('user.layout-users.script')

    <script>
        // دالة عرض صورة الإشعار
        function showAdImage(notif) {
            var exampleUrl = "";
            var fileUrl = exampleUrl + "/storage/" + notif['img'];
            var imgElement = document.getElementById("notificationImage");
            var pdfElement = document.getElementById("notificationPdf");

            // إعادة تعيين عرض العناصر
            imgElement.style.display = "none";
            pdfElement.style.display = "none";

            if (notif['img'].endsWith('.pdf')) {
                pdfElement.src = fileUrl;
                pdfElement.style.display = "block";
            } else {
                imgElement.src = fileUrl;
                imgElement.style.display = "block";
            }
        }

        // تهيئة الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            // تفعيل التأثيرات الحركية عند التمرير
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            // مراقبة عناصر الصفحة للتأثيرات
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    @yield('script')
</body>
</html>
