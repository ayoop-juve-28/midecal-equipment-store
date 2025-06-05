<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ميديكا | معدات طبية عالية الجودة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6D28D9',
                        secondary: '#8B5CF6',
                        accent: '#C4B5FD',
                        light: '#F5F3FF',
                        dark: '#1F1F1F',
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                    },
                    keyframes: {
                        'fade-in-up': {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                    animation: {
                        'fade-in-up': 'fade-in-up 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite'
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.45/dist/vue.global.prod.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .dark .glass-effect {
            background: rgba(31, 31, 31, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            right: 0;
            background-color: #8B5CF6;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }
    </style>
</head>
<body class="bg-light dark:bg-dark text-gray-800 dark:text-gray-100">
    <div id="app">
        <!-- الشريط العلوي -->
        <div class="bg-gradient-to-r from-primary to-secondary text-white text-sm">
            <div class="container mx-auto px-4 py-2 flex flex-col md:flex-row items-center justify-between">
                <div class="flex flex-wrap justify-center gap-4 md:gap-6 mb-2 md:mb-0">
                    <a href="#categories" class="flex items-center hover:text-accent transition-colors">
                        <i class="fas fa-th-large ml-1"></i> الفئات
                    </a>
                    <a href="#testimonials" class="flex items-center hover:text-accent transition-colors">
                        <i class="fas fa-star ml-1"></i> التقييمات
                    </a>
                    <a href="#offers" class="flex items-center hover:text-accent transition-colors">
                        <i class="fas fa-percentage ml-1"></i> العروض
                    </a>
                    <a href="#contact" class="flex items-center hover:text-accent transition-colors">
                        <i class="fas fa-headset ml-1"></i> الدعم الفني
                    </a>
                </div>

                <div class="flex items-center space-x-4 space-x-reverse">
                    <a href="{{ route('ShowLogin') }}" class="bg-white text-primary px-4 py-1 rounded-lg hover:bg-opacity-90 transition-all flex items-center">
                        <i class="fas fa-sign-in-alt ml-1"></i> تسجيل الدخول
                    </a>
                </div>
            </div>
        </div>

        <!-- شريط التنقل الرئيسي -->
        <nav class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg shadow-sm border-b border-gray-200 dark:border-gray-700">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="#" class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent flex items-center">
                            <i class="fas fa-heartbeat ml-2 text-primary"></i>ميديكا
                        </a>
                    </div>

                    <div class="hidden md:flex space-x-8 space-x-reverse">
                        <a v-for="(nav, index) in navLinks" :key="index" :href="nav.link"
                           class="px-3 py-2 nav-link text-gray-700 dark:text-gray-300 hover:text-primary transition-colors">
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 space-x-reverse">
                        <button @click="toggleDarkMode" class="p-2 text-gray-600 dark:text-gray-300 hover:text-primary">
                            <i class="fas fa-moon dark:hidden"></i>
                            <i class="fas fa-sun hidden dark:block"></i>
                        </button>

                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-primary">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- قائمة الجوال -->
            <div v-if="mobileMenuOpen" class="md:hidden bg-white/95 dark:bg-gray-900/95 backdrop-blur-lg px-4 py-3 border-t border-gray-200 dark:border-gray-700">
                <div class="space-y-2">
                    <a v-for="(nav, index) in navLinks" :key="index" :href="nav.link"
                       class="block py-3 px-4 rounded-lg hover:bg-primary/10 hover:text-primary transition-all">
                    </a>
                    <div class="pt-2 border-t border-gray-200 dark:border-gray-700">
                        <a href="#" class="block py-3 px-4 bg-gradient-to-r from-primary to-secondary text-white rounded-lg text-center">
                            <i class="fas fa-sign-in-alt ml-2"></i> تسجيل الدخول
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- القسم الرئيسي -->
        <section id="home" class="relative py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2 space-y-8 scroll-animate">
                        <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                            المعدات الطبية الأكثر تطوراً بين يديك
                        </h1>
                        <p class="text-lg text-gray-600 dark:text-gray-300">
                            نوفر لك أحدث المعدات الطبية عالية الجودة مع ضمان الجودة وخدمة ما بعد البيع.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#products" class="px-8 py-3 bg-gradient-to-r from-primary to-secondary hover:shadow-lg text-white rounded-xl text-center transition-all flex items-center justify-center">
                                تصفح المنتجات <i class="fas fa-arrow-left ml-2"></i>
                            </a>
                            <a href="#contact" class="px-8 py-3 border-2 border-primary text-primary hover:bg-primary/10 rounded-xl text-center transition-all flex items-center justify-center">
                                تواصل معنا
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-6 text-gray-600 dark:text-gray-400">
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i class="fas fa-truck-fast text-primary"></i>
                                </div>
                                <span>شحن سريع</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i class="fas fa-certificate text-primary"></i>
                                </div>
                                <span>منتجات معتمدة</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i class="fas fa-headset text-primary"></i>
                                </div>
                                <span>دعم فني 24/7</span>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 relative scroll-animate">
                        <div class="glass-effect rounded-3xl p-6 shadow-xl overflow-hidden border border-white/20 dark:border-gray-700/30 animate-float">
                            <img src="https://images.unsplash.com/photo-1581595214211-71fea5834278"
                                 class="rounded-2xl w-full h-auto object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="absolute -bottom-5 -right-5 w-24 h-24 bg-secondary rounded-full filter blur-3xl opacity-20 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم الفئات -->
        <section id="categories" class="py-16 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">اكتشف فئات المنتجات</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        مجموعة واسعة من المعدات الطبية المصنفة بعناية لتسهيل وصولك إلى ما تحتاجه
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div v-for="(category, index) in categories" :key="index"
                         class="group glass-effect p-6 rounded-2xl border border-transparent hover:border-primary/20 transition-all hover:shadow-lg">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                            <i :class="category.icon + ' text-2xl text-primary'"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3"></h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4"></p>
                        <a href="#" class="inline-flex items-center text-primary hover:text-secondary">
                            تصفح المنتجات
                            <i class="fas fa-arrow-left ml-2 transition-transform group-hover:-translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم المنتجات -->
        <section id="products" class="py-16 bg-light/50 dark:bg-gray-900 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">منتجات مميزة</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        اكتشف أحدث المنتجات والعروض الخاصة في متجرنا
                    </p>
                </div>

                <div class="flex justify-center mb-8">
                    <div class="inline-flex bg-white dark:bg-gray-800 p-1 rounded-xl shadow-sm">
                        <button v-for="(tab, index) in productTabs" :key="index"
                                @click="currentProductTab = tab.id"
                                :class="[
                                    'px-4 py-2 text-sm font-medium rounded-lg transition-all',
                                    currentProductTab === tab.id
                                        ? 'bg-gradient-to-r from-primary to-secondary text-white'
                                        : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700'
                                ]">
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <div v-for="(product, index) in filteredProducts" :key="index"
                         class="group glass-effect rounded-xl overflow-hidden hover:shadow-lg border border-transparent hover:border-primary/20 transition-all">
                        <div class="relative h-60 overflow-hidden">
                            <img :src="product.image" :alt="product.name" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-3 right-3 flex">
                                <span v-if="product.isNew" class="bg-green-500 text-white text-xs px-2 py-1 rounded-md">جديد</span>
                                <span v-if="product.discount" class="bg-red-500 text-white text-xs px-2 py-1 rounded-md mr-2">% خصم</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2"></h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3"></p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-primary"> ر.س</span>
                                    <span v-if="product.oldPrice" class="text-sm text-gray-500 line-through mr-2"> ر.س</span>
                                </div>
                                <button @click="toggleWishlist(product)" class="p-2 text-gray-400 hover:text-red-500 transition-colors">
                                    <i :class="{'fas text-red-500': isInWishlist(product.id), 'far': !isInWishlist(product.id)}" class="fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="#" class="inline-block px-8 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-white rounded-xl transition-all">
                        عرض جميع المنتجات
                    </a>
                </div>
            </div>
        </section>

        <!-- قسم المميزات -->
        <section id="features" class="py-16 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">لماذا تختار متجرنا؟</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        نحن نقدم لك تجربة تسوق فريدة مع مجموعة من المميزات التي تجعلنا الخيار الأفضل
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div v-for="(feature, index) in features" :key="index"
                         class="glass-effect p-6 rounded-xl border border-transparent hover:border-primary/20 transition-all hover:shadow-lg">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl mb-5" :class="feature.bgColor">
                            <i :class="feature.icon + ' text-2xl ' + feature.iconColor"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3"></h3>
                        <p class="text-gray-600 dark:text-gray-400"></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم التقييمات -->
        <section id="testimonials" class="py-16 bg-light/50 dark:bg-gray-900 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">ماذا يقول عملاؤنا</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        تعرف على تجارب عملائنا الحقيقية مع منتجاتنا وخدماتنا
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div v-for="(testimonial, index) in testimonials" :key="index"
                         class="glass-effect p-6 rounded-xl border border-transparent hover:border-primary/20 transition-all hover:shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 mr-4 rounded-full overflow-hidden">
                                <img :src="testimonial.avatar" :alt="testimonial.name" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold"></h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400"></p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="flex">
                                <i v-for="n in 5" :key="n" class="fas fa-star" :class="n <= testimonial.rating ? 'text-yellow-400' : 'text-gray-300'"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400"></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم النشرة البريدية -->
        <section id="newsletter" class="py-16 bg-gradient-to-r from-primary to-secondary text-white scroll-animate">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-4">انضم للنشرة البريدية</h2>
                    <p class="mb-6 max-w-2xl mx-auto">احصل على آخر العروض والمنتجات الجديدة مباشرة إلى بريدك الإلكتروني</p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="أدخل بريدك الإلكتروني"
                               class="flex-grow px-4 py-3 rounded-lg focus:outline-none text-gray-800">
                        <button class="px-6 py-3 bg-white text-primary font-medium rounded-lg hover:bg-opacity-90 transition-all">
                            اشتراك
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم الاتصال -->
        <section id="contact" class="py-16 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">تواصل معنا</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        نحن هنا للإجابة على جميع استفساراتك وتقديم الدعم الكامل لك
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <div v-for="(contactItem, index) in contactInfo" :key="index"
                         class="glass-effect p-6 rounded-xl text-center border border-transparent hover:border-primary/20 transition-all hover:shadow-lg">
                        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-xl mb-4" :class="contactItem.bgColor">
                            <i :class="contactItem.icon + ' text-2xl ' + contactItem.iconColor"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2"></h3>
                        <p class="text-gray-600 dark:text-gray-400"></p>
                    </div>
                </div>

                <div class="glass-effect rounded-2xl p-8 shadow-sm border border-transparent hover:border-primary/20 transition-all">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <input type="text" placeholder="الاسم الكامل"
                                   class="w-full px-4 py-3 bg-white/50 dark:bg-gray-700/50 rounded-lg border border-white/30 dark:border-gray-600/30 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all">
                            <input type="email" placeholder="البريد الإلكتروني"
                                   class="w-full px-4 py-3 bg-white/50 dark:bg-gray-700/50 rounded-lg border border-white/30 dark:border-gray-600/30 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all">
                            <input type="tel" placeholder="رقم الهاتف"
                                   class="w-full px-4 py-3 bg-white/50 dark:bg-gray-700/50 rounded-lg border border-white/30 dark:border-gray-600/30 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all">
                        </div>
                        <div>
                            <textarea placeholder="الرسالة" rows="6"
                                      class="w-full px-4 py-3 bg-white/50 dark:bg-gray-700/50 rounded-lg border border-white/30 dark:border-gray-600/30 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-6">
                        <button class="px-8 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:shadow-lg transition-all">
                            إرسال الرسالة
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- التذييل -->
        <footer class="bg-gray-900 text-white py-12 scroll-animate">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                            ميديكا
                        </h3>
                        <p class="text-gray-400 mb-4">
                            نوفر أحدث المعدات الطبية عالية الجودة مع ضمان الجودة وخدمة ما بعد البيع.
                        </p>
                        <div class="flex space-x-4 space-x-reverse">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">روابط سريعة</h3>
                        <ul class="space-y-2">
                            <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">الرئيسية</a></li>
                            <li><a href="#categories" class="text-gray-400 hover:text-white transition-colors">الفئات</a></li>
                            <li><a href="#products" class="text-gray-400 hover:text-white transition-colors">المنتجات</a></li>
                            <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">المميزات</a></li>
                            <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors">آراء العملاء</a></li>
                            <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">اتصل بنا</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">المنتجات الشائعة</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">أجهزة مراقبة المرضى</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">أجهزة التنفس الصناعي</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">أجهزة التصوير الطبي</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">الأدوات الجراحية</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">معدات التعقيم</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">ساعات العمل</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center"><i class="fas fa-clock ml-2"></i> الأحد - الخميس: 9 صباحاً - 9 مساءً</li>
                            <li class="flex items-center"><i class="fas fa-clock ml-2"></i> الجمعة: 2 مساءً - 9 مساءً</li>
                            <li class="flex items-center"><i class="fas fa-clock ml-2"></i> السبت: 9 صباحاً - 5 مساءً</li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500">
                    <p>جميع الحقوق محفوظة &copy; ميديكا</p>
                </div>
            </div>
        </footer>

        <!-- زر العودة للأعلى -->
        <button v-if="showBackToTop" @click="scrollToTop"
                class="fixed bottom-6 left-6 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:bg-secondary transition-all z-40">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    mobileMenuOpen: false,
                    isDark: false,
                    showBackToTop: false,
                    currentProductTab: 'all',
                    wishlist: [],
                    navLinks: [
                        { name: 'الرئيسية', link: '#home' },
                        { name: 'الفئات', link: '#categories' },
                        { name: 'المنتجات', link: '#products' },
                        { name: 'المميزات', link: '#features' },
                        { name: 'آراء العملاء', link: '#testimonials' },
                        { name: 'اتصل بنا', link: '#contact' },
                    ],
                    categories: [
                        {
                            name: 'أجهزة مراقبة المرضى',
                            description: 'أجهزة متطورة لمراقبة الحالات الصحية بدقة عالية',
                            icon: 'fas fa-heartbeat'
                        },
                        {
                            name: 'الأدوات الجراحية',
                            description: 'مجموعة كاملة من الأدوات الجراحية عالية الجودة',
                            icon: 'fas fa-scissors'
                        },
                        {
                            name: 'أجهزة التصوير الطبي',
                            description: 'أحدث أجهزة التصوير الطبي مع تقنيات متقدمة',
                            icon: 'fas fa-x-ray'
                        },
                        {
                            name: 'معدات التعقيم',
                            description: 'معدات تعقيم احترافية لضمان بيئة آمنة',
                            icon: 'fas fa-shield-virus'
                        }
                    ],
                    productTabs: [
                        { id: 'all', name: 'الكل' },
                        { id: 'new', name: 'الجديد' },
                        { id: 'popular', name: 'الأكثر مبيعاً' },
                        { id: 'offers', name: 'العروض' }
                    ],
                    products: [
                        {
                            id: 1,
                            name: 'جهاز مراقبة المرضى',
                            shortDescription: 'جهاز متطور لمراقبة الحالة الصحية',
                            category: 'مراقبة',
                            price: 12500,
                            oldPrice: 14000,
                            isNew: true,
                            isPopular: true,
                            discount: 15,
                            image: 'https://images.unsplash.com/photo-1516549655169-df83a0774514?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 2,
                            name: 'طقم أدوات جراحية',
                            shortDescription: 'مجموعة كاملة من الأدوات الجراحية',
                            category: 'جراحة',
                            price: 8700,
                            isNew: false,
                            isPopular: true,
                            discount: 0,
                            image: 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 3,
                            name: 'جهاز أشعة متنقل',
                            shortDescription: 'جهاز أشعة متنقل سهل الاستخدام',
                            category: 'تصوير',
                            price: 22000,
                            oldPrice: 27500,
                            isNew: true,
                            isPopular: false,
                            discount: 20,
                            image: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 4,
                            name: 'جهاز تنفس صناعي',
                            shortDescription: 'جهاز تنفس صناعي لدعم المرضى',
                            category: 'تنفس',
                            price: 35000,
                            isNew: false,
                            isPopular: true,
                            discount: 0,
                            image: 'https://images.unsplash.com/photo-1584982751601-97dcc096659c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 5,
                            name: 'سرير مستشفى كهربائي',
                            shortDescription: 'سرير مستشفى كهربائي متعدد الوظائف',
                            category: 'أثاث',
                            price: 15800,
                            oldPrice: 18000,
                            isNew: false,
                            isPopular: false,
                            discount: 12,
                            image: 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 6,
                            name: 'جهاز تعقيم بالبخار',
                            shortDescription: 'جهاز تعقيم بالبخار عالي الكفاءة',
                            category: 'تعقيم',
                            price: 9500,
                            isNew: true,
                            isPopular: false,
                            discount: 0,
                            image: 'https://images.unsplash.com/photo-1583947215259-38e31be8751f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 7,
                            name: 'كرسي متحرك كهربائي',
                            shortDescription: 'كرسي متحرك كهربائي سهل الاستخدام',
                            category: 'تنقل',
                            price: 7800,
                            oldPrice: 9000,
                            isNew: false,
                            isPopular: true,
                            discount: 13,
                            image: 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        },
                        {
                            id: 8,
                            name: 'جهاز تخطيط القلب',
                            shortDescription: 'جهاز تخطيط قلب متطور ودقيق',
                            category: 'قلب',
                            price: 18500,
                            isNew: true,
                            isPopular: true,
                            discount: 0,
                            image: 'https://images.unsplash.com/photo-1559757175-7cb057cecf1c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
                        }
                    ],
                    features: [
                        {
                            title: 'جودة معتمدة',
                            description: 'جميع منتجاتنا معتمدة من الهيئات الرقابية ومطابقة للمعايير العالمية للسلامة',
                            icon: 'fas fa-certificate',
                            iconColor: 'text-green-500',
                            bgColor: 'bg-green-100 dark:bg-green-900/20'
                        },
                        {
                            title: 'شحن سريع',
                            description: 'نوفر خدمة الشحن السريع لجميع مناطق المملكة مع إمكانية التتبع المباشر',
                            icon: 'fas fa-truck-fast',
                            iconColor: 'text-blue-500',
                            bgColor: 'bg-blue-100 dark:bg-blue-900/20'
                        },
                        {
                            title: 'دعم فني 24/7',
                            description: 'فريق الدعم الفني متاح على مدار الساعة للإجابة على جميع استفساراتك',
                            icon: 'fas fa-headset',
                            iconColor: 'text-purple-500',
                            bgColor: 'bg-purple-100 dark:bg-purple-900/20'
                        },
                        {
                            title: 'ضمان شامل',
                            description: 'ضمان شامل على جميع المنتجات مع خدمة الصيانة وقطع الغيار الأصلية',
                            icon: 'fas fa-shield-alt',
                            iconColor: 'text-yellow-500',
                            bgColor: 'bg-yellow-100 dark:bg-yellow-900/20'
                        },
                        {
                            title: 'عروض خاصة',
                            description: 'عروض وخصومات مستمرة على المنتجات الأكثر طلباً وعلى المشتريات بالجملة',
                            icon: 'fas fa-tag',
                            iconColor: 'text-red-500',
                            bgColor: 'bg-red-100 dark:bg-red-900/20'
                        },
                        {
                            title: 'تدريب مجاني',
                            description: 'نوفر تدريباً مجانياً على استخدام الأجهزة المعقدة لضمان الاستخدام الأمثل',
                            icon: 'fas fa-graduation-cap',
                            iconColor: 'text-indigo-500',
                            bgColor: 'bg-indigo-100 dark:bg-indigo-900/20'
                        }
                    ],
                    testimonials: [
                        {
                            name: 'د. أحمد محمد',
                            position: 'مدير مستشفى الرحمة',
                            rating: 5,
                            comment: 'تعاملنا مع ميديكا كان تجربة ممتازة، جودة المنتجات عالية جداً وخدمة ما بعد البيع متميزة.',
                            avatar: 'https://randomuser.me/api/portraits/men/4.jpg'
                        },
                        {
                            name: 'د. سارة علي',
                            position: 'طبيبة أسنان',
                            rating: 5,
                            comment: 'أنا سعيدة جداً بالمعدات التي اشتريتها من ميديكا، فريق الدعم الفني ممتاز وسريع الاستجابة.',
                            avatar: 'https://randomuser.me/api/portraits/women/41.jpg'
                        },
                        {
                            name: 'د. خالد الأحمد',
                            position: 'مدير مركز طبي',
                            rating: 4,
                            comment: 'منتجات عالية الجودة وأسعار منافسة. أنصح بالتعامل مع ميديكا لجميع احتياجات العيادة.',
                            avatar: 'https://randomuser.me/api/portraits/men/22.jpg'
                        },
                        {
                            name: 'د. نورا سعيد',
                            position: 'استشارية جراحة',
                            rating: 5,
                            comment: 'الأدوات الجراحية التي اشتريتها كانت ممتازة ودقيقة جداً، سعيدة بالتعامل مع ميديكا.',
                            avatar: 'https://randomuser.me/api/portraits/women/63.jpg'
                        }
                    ],
                    contactInfo: [
                        {
                            title: 'رقم الهاتف',
                            info: '+966 12 345 6789',
                            icon: 'fas fa-phone-alt',
                            iconColor: 'text-blue-500',
                            bgColor: 'bg-blue-100 dark:bg-blue-900/20'
                        },
                        {
                            title: 'البريد الإلكتروني',
                            info: 'info@medica.com',
                            icon: 'fas fa-envelope',
                            iconColor: 'text-green-500',
                            bgColor: 'bg-green-100 dark:bg-green-900/20'
                        },
                        {
                            title: 'العنوان',
                            info: 'الرياض، المملكة العربية السعودية',
                            icon: 'fas fa-map-marker-alt',
                            iconColor: 'text-red-500',
                            bgColor: 'bg-red-100 dark:bg-red-900/20'
                        }
                    ]
                }
            },
            computed: {
                filteredProducts() {
                    if (this.currentProductTab === 'all') {
                        return this.products;
                    } else if (this.currentProductTab === 'new') {
                        return this.products.filter(product => product.isNew);
                    } else if (this.currentProductTab === 'popular') {
                        return this.products.filter(product => product.isPopular);
                    } else if (this.currentProductTab === 'offers') {
                        return this.products.filter(product => product.discount > 0);
                    }
                }
            },
            methods: {
                toggleDarkMode() {
                    this.isDark = !this.isDark;
                    document.documentElement.classList.toggle('dark', this.isDark);
                },
                toggleWishlist(product) {
                    const index = this.wishlist.findIndex(item => item.id === product.id);
                    if (index === -1) {
                        this.wishlist.push(product);
                    } else {
                        this.wishlist.splice(index, 1);
                    }
                },
                isInWishlist(productId) {
                    return this.wishlist.some(item => item.id === productId);
                },
                scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                },
                handleScroll() {
                    this.showBackToTop = window.scrollY > 300;
                },
                animateOnScroll() {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('animate-fade-in-up');
                            }
                        });
                    }, { threshold: 0.1 });

                    document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));
                }
            },
            mounted() {
                this.animateOnScroll();
                window.addEventListener('scroll', this.handleScroll);
            },
            beforeUnmount() {
                window.removeEventListener('scroll', this.handleScroll);
            }
        }).mount('#app');
    </script>
</body>
</html>
