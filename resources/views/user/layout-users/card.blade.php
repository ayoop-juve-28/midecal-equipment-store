<div class="card product-card h-100 border-0 glass-effect overflow-hidden">
    <!-- Carousel -->
    <div id="slideshow-{{ uniqid() }}" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
                @if(rand(0,1))
                <div class="position-absolute top-0 start-0 m-2">
                    <span class="badge bg-accent text-primary">جديد</span>
                </div>
                @endif
                @if(rand(0,1))
                <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-danger">خصم 15%</span>
                </div>
                @endif
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2529146/pexels-photo-2529146.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2529147/pexels-photo-2529147.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev opacity-0 product-control" type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next opacity-0 product-control" type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Card Body -->
    <div class="card-body text-center">
        <!-- Product Rating -->
        <div class="product-rating mb-2">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star-half-alt text-warning"></i>
            <small class="text-muted">(4.5/5 من 12 تقييم)</small>
        </div>

        <h4 class="text-primary fw-bold">£60.99</h4>
        <h5 class="card-title">جهاز قياس الضغط</h5>
        <p class="card-text text-muted">جهاز طبي رقمي عالي الدقة لقياس ضغط الدم بسهولة.</p>
        <div class="d-flex justify-content-center gap-2 mt-3">
            <!-- زر الشراء -->
            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">
                <i class="fas fa-cart-plus me-2"></i>شراء الآن
            </a>
            <!-- زر المفضلة -->
            <button class="like-btn">
                <i class="far fa-heart"></i>
            </button>
        </div>
    </div>
</div>

<style>
    /* تحسينات إضافية للبطاقة */
    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .product-card:hover .product-control {
        opacity: 0.8 !important;
    }

    .product-control {
        transition: opacity 0.3s ease;
    }

    .like-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        color: var(--primary);
        border: 1px solid var(--accent);
        transition: all 0.3s ease;
    }

    .like-btn:hover {
        background-color: var(--accent-light);
    }

    .like-btn.active {
        background-color: var(--primary);
        color: white;
    }

    .dark .like-btn {
        background-color: var(--dark-secondary);
        color: var(--accent);
    }

    .dark .like-btn:hover {
        background-color: var(--gray-700);
    }

    .dark .like-btn.active {
        background-color: var(--primary);
        color: white;
    }

    .carousel-indicators {
        margin-bottom: 0.5rem;
    }

    .carousel-indicators [data-bs-target] {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.5);
        border: none;
    }

    .carousel-indicators .active {
        background-color: white;
    }
</style>

<script>
    // استخدام JavaScript لإصلاح مشكلة uniqid في الوضع العرض
    document.addEventListener('DOMContentLoaded', function() {
        // استبدال جميع القيم المكررة المُحتملة لـ data-bs-target
        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach(function(carousel, index) {
            const id = 'product-carousel-' + index;
            carousel.id = id;

            const indicators = carousel.querySelectorAll('.carousel-indicators button');
            indicators.forEach(function(indicator) {
                indicator.setAttribute('data-bs-target', '#' + id);
            });

            const controls = carousel.querySelectorAll('.carousel-control-prev, .carousel-control-next');
            controls.forEach(function(control) {
                control.setAttribute('data-bs-target', '#' + id);
            });
        });

        // تهيئة أزرار الإعجاب
        document.querySelectorAll('.like-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            });
        });
    });
</script>
