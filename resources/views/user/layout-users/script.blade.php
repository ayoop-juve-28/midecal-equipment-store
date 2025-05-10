<!-- المكتبات الأساسية -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js')}}"></script>
<script src="{{ asset('assets/js/config.js')}}"></script>
<script src="{{ asset('assets/js/pcoded.js')}}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/choices.min.js')}}"></script>

<!-- مكتبات إضافية -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<script>
  // =============================================
  // تهيئة شاشة التحميل
  // =============================================
  window.addEventListener('load', function() {
    const loadingOverlay = document.getElementById('loading-overlay');
    setTimeout(() => {
      loadingOverlay.style.opacity = '0';
      setTimeout(() => {
        loadingOverlay.style.display = 'none';
      }, 300);
    }, 500);
  });

  // =============================================
  // إدارة الوضع الليلي
  // =============================================
  function initializeDarkMode() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const darkIcons = document.querySelectorAll('.dark-icon');
    const lightIcons = document.querySelectorAll('.light-icon');

    // التحقق من الإعدادات المحفوظة
    const storedDarkMode = localStorage.getItem('darkMode') === 'true';
    const systemDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // تطبيق الإعدادات الأولية
    if (storedDarkMode || (!localStorage.getItem('darkMode') && systemDarkMode)) {
      document.body.classList.add('dark');
      darkIcons.forEach(icon => icon.classList.add('d-none'));
      lightIcons.forEach(icon => icon.classList.remove('d-none'));
    }

    // حدث تبديل الوضع
    darkModeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      darkIcons.forEach(icon => icon.classList.toggle('d-none'));
      lightIcons.forEach(icon => icon.classList.toggle('d-none'));
      localStorage.setItem('darkMode', document.body.classList.contains('dark'));
    });

    // مراقبة تغييرات النظام
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
      if (!localStorage.getItem('darkMode')) {
        document.body.classList.toggle('dark', e.matches);
        darkIcons.forEach(icon => icon.classList.toggle('d-none', e.matches));
        lightIcons.forEach(icon => icon.classList.toggle('d-none', !e.matches));
      }
    });
  }

  // =============================================
  // إدارة زر العودة للأعلى
  // =============================================
  function initializeBackToTop() {
    const backButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
      backButton.style.display = window.scrollY > 300 ? 'block' : 'none';
    });

    backButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // =============================================
  // إدارة القائمة الجانبية
  // =============================================
  function initializeSidebar() {
    // فتح/إغلاق القوائم الفرعية
    document.querySelectorAll('.pc-hasmenu > a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const parent = this.parentElement;
        const submenu = parent.querySelector('.pc-submenu');
        const arrowIcon = parent.querySelector('.pc-arrow i');

        if (parent.classList.contains('active')) {
          parent.classList.remove('active');
          submenu.style.display = 'none';
          arrowIcon.classList.replace('fa-chevron-up', 'fa-chevron-down');
        } else {
          document.querySelectorAll('.pc-hasmenu.active').forEach(activeMenu => {
            activeMenu.classList.remove('active');
            activeMenu.querySelector('.pc-submenu').style.display = 'none';
            activeMenu.querySelector('.pc-arrow i').classList.replace('fa-chevron-up', 'fa-chevron-down');
          });

          parent.classList.add('active');
          submenu.style.display = 'block';
          arrowIcon.classList.replace('fa-chevron-down', 'fa-chevron-up');
        }
      });
    });

    // تبديل عرض القائمة في الجوال
    document.querySelectorAll('#mobile-collapse, #sidebar-hide').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        document.body.classList.toggle('sidebar-hide');
      });
    });
  }

  // =============================================
  // إدارة أزرار الإعجاب
  // =============================================
  function initializeLikeButtons() {
    document.querySelectorAll('.like-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const icon = this.querySelector('i');
        this.classList.toggle('active');
        icon.classList.toggle('far');
        icon.classList.toggle('fas');
      });
    });
  }

  // =============================================
  // وظائف العرض المختلفة
  // =============================================
  function showAdImage(ad) {
    document.getElementById("adName").textContent = ad.name;
    document.getElementById("adDate").textContent = ad.created_at.split("T")[0];
    document.getElementById("adImage").src = `/storage/${ad.img}`;
  }

  function showPaymentImage(payment) {
    document.getElementById("paymentName").textContent = payment.name;
    document.getElementById("paymentImage").src = `/storage/${payment.logo}`;
  }

  function showProductData(product) {
    document.getElementById("productName").textContent = product.name;
    document.getElementById("productDescription").textContent = product.description;
    document.getElementById("productDescription_en").textContent = product.description_en;
    document.getElementById("productImage").src = `/storage/${product.logo}`;
  }

  function showClassPayments(classification) {
    console.log(classification);
    document.getElementById("classificationName").textContent = classification.name;
    const tableBody = document.getElementById("bodyrow33");
    tableBody.innerHTML = '';

    classification.payments.forEach(payment => {
      const row = tableBody.insertRow();
      row.insertCell().textContent = payment.payment.name;
    });
  }

  function showCategoryImage(category) {
    document.getElementById("categoryName").textContent = category.name;
    document.getElementById("categoryImage").src = `/storage/${category.logo}`;
  }

  function showCustomerPhones(customer) {
    document.getElementById("customerName").textContent = customer.name;
    const tableBody = document.getElementById("bodyrow44");
    tableBody.innerHTML = '';

    // إضافة الرقم الأساسي
    const mainRow = tableBody.insertRow();
    mainRow.insertCell().textContent = customer.mobile_number;

    // إضافة الأرقام الإضافية
    customer.phone_numbers.forEach(phone => {
      const row = tableBody.insertRow();
      row.insertCell().textContent = phone.mobile_number;
    });
  }

  function showOrderCards(order) {
    console.log(order);
    document.getElementById("orderName").textContent = order.customer.mobile_number;
    const tableBody = document.getElementById("bodyrow");
    tableBody.innerHTML = '';

    order.cards.forEach(card => {
      const row = tableBody.insertRow();
      row.insertCell().textContent = card.classification.name;
      row.insertCell().textContent = card.quantity;
      const priceCell = row.insertCell();
      priceCell.textContent = card.classification.price;
      priceCell.style.color = "green";
    });
  }

  // =============================================
  // تهيئة مكتبة الرسوم المتحركة عند التمرير (AOS)
  // =============================================
  function initializeAOS() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 100
    });
  }

  // =============================================
  // التهيئة العامة عند تحميل الصفحة
  // =============================================
  document.addEventListener('DOMContentLoaded', function() {
    initializeDarkMode();
    initializeBackToTop();
    initializeSidebar();
    initializeLikeButtons();
    initializeAOS();

    // تأثيرات البطاقات عند التمرير
    document.querySelectorAll('.product-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-5px) scale(1.02)';
        card.style.boxShadow = '0 10px 15px rgba(0,0,0,0.1)';
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
        card.style.boxShadow = '0 2px 5px rgba(0,0,0,0.1)';
      });
    });

    // تهيئة مكتبة Choices.js
    const initChoices = () => {
      const elements = [
        { id: 'choices-text-remove-button', options: {
          delimiter: ',',
          editItems: true,
          maxItemCount: 5,
          removeItemButton: true
        }},
        // إضافة بقية العناصر هنا...
      ];

      elements.forEach(({ id, options }) => {
        const element = document.getElementById(id);
        if (element) new Choices(element, options);
      });
    };

    initChoices();
  });

  // =============================================
  // وظائف مساعدة إضافية
  // =============================================
  function hideElement(elementId) {
    document.getElementById(elementId).style.display = 'none';
  }

  function toggleElementVisibility(elementId) {
    const element = document.getElementById(elementId);
    element.style.display = element.style.display === 'none' ? 'block' : 'none';
  }
</script>

<!-- أكواد خاصة ببطاقات الإعجاب -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.like-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const icon = this.querySelector('i');
        this.classList.toggle('active');
        icon.classList.toggle('bi-heart');
        icon.classList.toggle('bi-heart-fill');
      });
    });
  });
</script>
