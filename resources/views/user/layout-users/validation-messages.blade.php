<!-- تنبيهات الخطأ والنجاح -->
@if ($errors->any())
<div class="alert glass-effect border-start border-4 border-danger mb-4 fade show" id="error-alert" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-exclamation-circle text-danger fs-4 me-3"></i>
        <div class="flex-grow-1">
            <h5 class="text-danger mb-1">خطأ!</h5>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="btn-close text-danger ms-2" onclick="closeAlert('error-alert')" aria-label="إغلاق"></button>
    </div>
</div>
@endif

@if(session('error'))
<div class="alert glass-effect border-start border-4 border-danger mb-4 fade show" id="session-error-alert" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-exclamation-circle text-danger fs-4 me-3"></i>
        <div class="flex-grow-1">
            <h5 class="text-danger mb-1">خطأ!</h5>
            <p class="mb-0">{{ session('error') }}</p>
        </div>
        <button type="button" class="btn-close text-danger ms-2" onclick="closeAlert('session-error-alert')" aria-label="إغلاق"></button>
    </div>
</div>
@endif

@if(session('success'))
<div class="alert glass-effect border-start border-4 border-success mb-4 fade show" id="success-alert" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-check-circle text-success fs-4 me-3"></i>
        <div class="flex-grow-1">
            <h5 class="text-success mb-1">تم بنجاح!</h5>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
        <button type="button" class="btn-close text-success ms-2" onclick="closeAlert('success-alert')" aria-label="إغلاق"></button>
    </div>
</div>
@endif

<script>
    // إخفاء التنبيه تلقائيًا بعد 5 ثوانٍ
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelectorAll('.alert').forEach(function(alert) {
                fadeOutAlert(alert.id);
            });
        }, 5000);
    });

    // وظيفة لإغلاق التنبيه مع تأثير التلاشي
    function closeAlert(alertId) {
        fadeOutAlert(alertId);
    }

    // تأثير التلاشي
    function fadeOutAlert(alertId) {
        const alert = document.getElementById(alertId);
        if (alert) {
            alert.style.opacity = '1';

            // تلاشي تدريجي
            (function fade() {
                if ((alert.style.opacity -= 0.1) < 0) {
                    alert.style.display = 'none';
                } else {
                    requestAnimationFrame(fade);
                }
            })();

            // إزالة من DOM بعد انتهاء التأثير
            setTimeout(function() {
                if (alert.parentNode) {
                    alert.parentNode.removeChild(alert);
                }
            }, 500);
        }
    }
</script>

<style>
    /* تنسيق التنبيهات */
    .alert {
        position: relative;
        padding: 1rem;
        border-radius: 0.75rem;
        transition: opacity 0.3s ease;
    }

    .alert .btn-close {
        background: transparent;
        border: none;
        font-size: 1.25rem;
        padding: 0;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .alert .btn-close:hover {
        opacity: 1;
    }

    /* تأثير انزلاق للتنبيهات عند ظهورها */
    @keyframes slideInDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .alert.fade.show {
        animation: slideInDown 0.3s forwards;
    }

    /* تعديلات الوضع المظلم */
    .dark .alert.glass-effect {
        background-color: rgba(45, 45, 45, 0.8);
    }
</style>
