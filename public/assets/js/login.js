
   const container = document.querySelector('.container');
    const registerBtn = document.querySelector('.register-btn');
   const loginBtn = document.querySelector('.login-btn');

    registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

    loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})

// إدارة الإشعارات
document.addEventListener('DOMContentLoaded', function() {
    // إغلاق الإشعار عند النقر
    document.querySelectorAll('.close-notification').forEach(btn => {
        btn.addEventListener('click', function() {
            const notification = this.closest('.notification');
            notification.style.animation = 'fadeOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        });
    });

    // إغلاق تلقائي بعد 5 ثواني
    document.querySelectorAll('.notification').forEach(notification => {
        setTimeout(() => {
            notification.style.animation = 'fadeOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    });
});
