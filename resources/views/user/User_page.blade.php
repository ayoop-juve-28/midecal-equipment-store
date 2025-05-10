@extends('user.layout-users.master')

@section('title')
    <title>الرئيسية | متجر المعدات الطبية</title>
@endsection

@section('content')
    <!-- شريط التنقل (Breadcrumb) -->
    <div class="page-header glass-effect mb-4 animate-on-scroll">
        <div class="page-block py-3">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}" class="text-primary">
                                    <i class="fas fa-home me-2"></i>لوحة التحكم
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">الرئيسية</li>
                        </ol>
                    </nav>
                    <h2 class="text-primary mt-2 mb-0 fw-bold">المنتجات المميزة</h2>
                </div>
                <div class="col-md-5 d-none d-md-block text-end">
                    <div class="search-bar position-relative">
                        <input type="text" class="form-control bg-light border-0 rounded-pill pe-5" placeholder="ابحث عن المنتجات...">
                        <button class="btn position-absolute top-0 end-0 text-primary h-100 px-3">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- قسم التصفية (Filters) -->
    <div class="filters mb-4 glass-effect p-3 rounded-lg animate-on-scroll" style="animation-delay: 0.1s">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-sm btn-primary active rounded-pill px-3">
                        الكل
                    </button>
                    <button class="btn btn-sm btn-light text-primary rounded-pill px-3">
                        الأجهزة الطبية
                    </button>
                    <button class="btn btn-sm btn-light text-primary rounded-pill px-3">
                        المستلزمات الطبية
                    </button>
                    <button class="btn btn-sm btn-light text-primary rounded-pill px-3">
                        الأدوات الجراحية
                    </button>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="d-flex justify-content-md-end">
                    <select class="form-select form-select-sm w-auto rounded-pill">
                        <option selected>ترتيب حسب</option>
                        <option>السعر: من الأقل للأعلى</option>
                        <option>السعر: من الأعلى للأقل</option>
                        <option>أحدث المنتجات</option>
                        <option>الأكثر مبيعاً</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- عرض المنتجات -->
    <div class="row">
        @for ($i = 0; $i < 8; $i++)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 animate-on-scroll" style="animation-delay: {{ 0.1 + ($i * 0.05) }}s">
                <div class="card product-card h-100 border-0 glass-effect overflow-hidden">
                    <!-- Carousel -->
                    <div id="product-carousel-{{ $i }}" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#product-carousel-{{ $i }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#product-carousel-{{ $i }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#product-carousel-{{ $i }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/2529146/pexels-photo-2529146.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/2529147/pexels-photo-2529147.jpeg" class="d-block w-100" style="height: 200px; object-fit: cover;" alt="صورة المنتج">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-carousel-{{ $i }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">السابق</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-carousel-{{ $i }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">التالي</span>
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
                            <small class="text-muted">(4.5/5)</small>
                        </div>

                        <h4 class="text-primary fw-bold">£60.99</h4>
                        <h5 class="card-title">جهاز قياس الضغط</h5>
                        <p class="card-text text-muted">جهاز طبي رقمي عالي الدقة لقياس ضغط الدم بسهولة.</p>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">
                                <i class="fas fa-cart-plus me-2"></i>شراء الآن
                            </a>
                            <button class="like-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4 mb-5">
        <nav aria-label="Product pagination">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@section('style')
<style>
    /* تنسيقات خاصة بالصفحة */
    .breadcrumb-item + .breadcrumb-item::before {
        color: var(--primary);
    }

    .page-link {
        color: var(--primary);
        border-radius: 0.5rem;
        margin: 0 0.2rem;
    }

    .page-item.active .page-link {
        background: var(--header-bg);
        border-color: var(--primary);
    }

    .carousel-indicators [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .animate-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
    }

    .animate-on-scroll.fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    .product-card:hover .carousel-control-prev,
    .product-card:hover .carousel-control-next {
        opacity: 0.8;
    }

    .carousel-control-prev,
    .carousel-control-next {
        opacity: 0;
        transition: opacity 0.3s;
    }
</style>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // تهيئة أزرار التصفية
        $('.filters .btn').click(function() {
            $('.filters .btn').removeClass('btn-primary active').addClass('btn-light text-primary');
            $(this).removeClass('btn-light text-primary').addClass('btn-primary active');
        });

        // تهيئة أزرار الإعجاب
        $('.like-btn').click(function() {
            $(this).toggleClass('active');
            var icon = $(this).find('i');
            if (icon.hasClass('far')) {
                icon.removeClass('far').addClass('fas');
            } else {
                icon.removeClass('fas').addClass('far');
            }
        });
    });
</script>
@endsection
