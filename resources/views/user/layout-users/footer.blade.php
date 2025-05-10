<footer class="pc-footer glass-effect mt-auto">
    <div class="footer-wrapper container-fluid">
        <div class="row align-items-center py-3">
            <div class="col-md-6 my-1">
                <p class="m-0 text-center text-md-end">
                    كل الحقوق محفوظة &copy; {{now()->format('Y')}}
                    <a href="https://www.instagram.com/a.y.28_juve?igsh=a2kzMmI0MXlsN3dx" target="_blank" class="text-primary hover:text-secondary transition-colors">
                        @a.y.28_juve
                    </a>
                </p>
            </div>
            <div class="col-md-6 my-1">
                <ul class="list-inline footer-social-links mb-0 d-flex justify-content-center justify-content-md-start gap-3">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/a.y.28_juve?igsh=a2kzMmI0MXlsN3dx" target="_blank" class="text-primary hover:text-secondary transition-colors">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-primary hover:text-secondary transition-colors">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-primary hover:text-secondary transition-colors">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-primary hover:text-secondary transition-colors">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- زر العودة للأعلى -->
<button id="back-to-top" class="back-to-top-btn bg-gradient-primary text-white rounded-circle shadow-lg p-2 border-0 position-fixed" style="bottom: 20px; right: 20px; display: none; width: 40px; height: 40px; z-index: 9999;">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // زر العودة للأعلى
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        $('#back-to-top').click(function() {
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });
    });
</script>
