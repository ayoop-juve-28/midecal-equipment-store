<div class="card product-card p-0 overflow-hidden shadow-sm">
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
                <img src="https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg" class="d-block w-100 img-fluid" style="border-radius: 0;" alt="Product Image">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2529146/pexels-photo-2529146.jpeg" class="d-block w-100 img-fluid" style="border-radius: 0;" alt="Product Image">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2529147/pexels-photo-2529147.jpeg" class="d-block w-100 img-fluid" style="border-radius: 0;" alt="Product Image">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideshow-{{ uniqid() }}" data-bs-slide="next">
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

        <h4 class="text-success fw-bold">£60.99</h4>
        <h5 class="card-title">جهاز قياس الضغط</h5>
        <p class="card-text text-muted">جهاز طبي رقمي عالي الدقة لقياس ضغط الدم بسهولة.</p>
        <div class="d-flex justify-content-center gap-2">
            <!-- Modified Add to Cart Button -->
            <a href="#" class="btn btn-success px-4 py-2 rounded-pill">
                <i class="fas fa-cart-plus me-2"></i>شراء الآن
            </a>
            <!-- Original Heart Button -->
            <button class="btn custom-icon like-btn"><i class="bi bi-heart"></i></button>
        </div>
    </div>
</div>

