    document.addEventListener('DOMContentLoaded', function() {
        // إخفاء شاشة التحميل
        setTimeout(function() {
            const loadingOverlay = document.getElementById('loading-overlay');
            if (loadingOverlay) {
                loadingOverlay.style.opacity = '0';
                setTimeout(function() {
                    loadingOverlay.style.display = 'none';
                }, 300);
            }
        }, 800);

        // تبديل بين تسجيل الدخول والتسجيل
        const container = document.querySelector('.container');
        const registerBtn = document.querySelector('.register-btn');
        const loginBtn = document.querySelector('.login-btn');

        if (registerBtn) {
            registerBtn.addEventListener('click', () => {
                container.classList.add('active');
            });
        }

        if (loginBtn) {
            loginBtn.addEventListener('click', () => {
                container.classList.remove('active');
            });
        }

        // إدارة الإشعارات
        document.querySelectorAll('.close-notification').forEach(btn => {
            btn.addEventListener('click', function() {
                const notification = this.closest('.notification');
                notification.style.animation = 'fadeOut 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            });
        });

        // إغلاق تلقائي للإشعارات بعد 5 ثوانٍ
        document.querySelectorAll('.notification').forEach(notification => {
            setTimeout(() => {
                notification.style.animation = 'fadeOut 0.3s ease';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 300);
            }, 5000);
        });

        // إدارة الوضع المظلم
        const darkModeToggle = document.getElementById('darkModeToggle');

        // التحقق من التفضيلات المحفوظة
        const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        const storedDarkMode = localStorage.getItem('darkMode') === 'true';

        // تطبيق الوضع المظلم إذا كان محفوظًا أو مفضلًا في المتصفح
        if (storedDarkMode || (prefersDarkMode && storedDarkMode !== 'false')) {
            document.body.classList.add('dark');
            if (darkModeToggle) {
                darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            }
        }

        // تبديل الوضع المظلم
        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', function() {
                document.body.classList.toggle('dark');
                const isDark = document.body.classList.contains('dark');
                localStorage.setItem('darkMode', isDark);
                this.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
            });
        }

        // تأثيرات حركية إضافية
        const addAnimationToInputs = () => {
            document.querySelectorAll('.input-box').forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });

            document.querySelectorAll('.social-icons a').forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    el.style.transition = 'all 0.5s ease';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 500 + (index * 50));
            });
        };

        // تطبيق التأثيرات الحركية عند تحميل الصفحة
        addAnimationToInputs();

        // تطبيق التأثيرات الحركية عند التبديل بين النماذج
        if (registerBtn) {
            registerBtn.addEventListener('click', () => {
                setTimeout(addAnimationToInputs, 1500);
            });
        }

        if (loginBtn) {
            loginBtn.addEventListener('click', () => {
                setTimeout(addAnimationToInputs, 1500);
            });
        }
    });
