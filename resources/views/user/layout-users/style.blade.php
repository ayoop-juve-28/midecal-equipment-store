 <!-- [Favicon] icon -->
 <link rel="icon" href="{{asset('assets/images/logggo.png')}}" type="image/x-icon">
 <!-- [Font] Family -->


<link rel="stylesheet" href="{{asset('assets/fonts/inter/inter.css')}}" id="main-font-link" />

<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link" />
<link rel="stylesheet" href="{{asset('assets/css/style-preset.css')}}" />
<!--[card CSS file]-->
<link rel="stylesheet" href="{{asset('assets/css/card_style.css')}}" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Flaticon UIcons CDN -->
<link rel='stylesheet' href="{{ asset('assets/css/import.css') }}">

<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
<!-- [Favicon] icon -->
<link rel="icon" href="{{asset('assets/images/logggo.png')}}" type="image/x-icon">

<!-- [Font] Family -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/fonts/inter/inter.css')}}" id="main-font-link" />

<!-- [Icons] -->
<link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}" />
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}" />
<link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>

<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link" />
<link rel="stylesheet" href="{{asset('assets/css/style-preset.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/card_style.css')}}" />
<link rel='stylesheet' href="{{ asset('assets/css/import.css') }}">

<!-- [Custom Styles] -->
<style>
    :root {
        --primary: #6D28D9;
        --primary-light: #8B5CF6;
        --primary-dark: #5B21B6;
        --secondary: #8B5CF6;
        --accent: #C4B5FD;
        --accent-light: #EDE9FE;
        --light: #F5F3FF;
        --dark: #1F1F1F;
        --dark-secondary: #2D2D2D;
        --success: #10B981;
        --warning: #F59E0B;
        --danger: #EF4444;
        --info: #3B82F6;
        --gray-100: #F3F4F6;
        --gray-200: #E5E7EB;
        --gray-300: #D1D5DB;
        --gray-400: #9CA3AF;
        --gray-500: #6B7280;
        --gray-600: #4B5563;
        --gray-700: #374151;
        --gray-800: #1F2937;
        --gray-900: #111827;

        --card-bg: #FFFFFF;
        --card-bg-dark: #2D2D2D;
        --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --card-border: 1px solid rgba(255, 255, 255, 0.2);
        --card-border-dark: 1px solid rgba(255, 255, 255, 0.1);

        --header-bg: linear-gradient(to right, var(--primary), var(--secondary));
        --header-color: #FFFFFF;

        --sidebar-bg: #FFFFFF;
        --sidebar-bg-dark: #2D2D2D;
        --sidebar-color: var(--gray-700);
        --sidebar-color-dark: var(--gray-300);
        --sidebar-item-hover: var(--accent-light);
        --sidebar-item-hover-dark: var(--gray-700);
        --sidebar-item-active: linear-gradient(to right, var(--primary), var(--secondary));
        --sidebar-item-active-color: #FFFFFF;

        --body-bg: var(--light);
        --body-bg-dark: var(--dark);
        --body-color: var(--gray-700);
        --body-color-dark: var(--gray-300);
    }

    /* General styles */
    body {
        font-family: 'Cairo', sans-serif;
        background-color: var(--body-bg);
        color: var(--body-color);
        transition: background-color 0.3s, color 0.3s;
    }

    body.dark {
        background-color: var(--body-bg-dark);
        color: var(--body-color-dark);
    }

    a {
        color: var(--primary);
        transition: color 0.3s ease;
    }

    a:hover {
        color: var(--primary-dark);
    }

    /* Glass Effect */
    .glass-effect {
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: var(--card-border);
        border-radius: 0.5rem;
    }

    .dark .glass-effect {
        background: rgba(31, 31, 31, 0.25);
        border: var(--card-border-dark);
    }

    /* Header Styles */
    .pc-header {
        background: var(--header-bg);
        border-radius: 0.5rem;
        margin: 0.5rem;
        box-shadow: var(--card-shadow);
        color: var(--header-color);
    }

    .pc-head-link {
        color: var(--header-color);
        transition: opacity 0.3s ease;
    }

    .pc-head-link:hover {
        opacity: 0.8;
        color: var(--header-color);
    }

    /* Sidebar Styles */
    .pc-sidebar {
        background-color: var(--sidebar-bg);
        border-radius: 0.75rem;
        margin: 0.5rem;
        box-shadow: var(--card-shadow);
        overflow: hidden;
    }

    .dark .pc-sidebar {
        background-color: var(--sidebar-bg-dark);
    }

    /* Navigation items */
    .pc-navbar {
        padding: 0.5rem;
    }

    .pc-navbar .pc-item {
        margin-bottom: 0.5rem;
    }

    .pc-navbar .pc-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        color: var(--sidebar-color);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .dark .pc-navbar .pc-link {
        color: var(--sidebar-color-dark);
    }

    .pc-navbar .pc-link:hover,
    .pc-navbar .pc-link:focus {
        background-color: var(--sidebar-item-hover);
        color: var(--primary);
        text-decoration: none;
    }

    .dark .pc-navbar .pc-link:hover,
    .dark .pc-navbar .pc-link:focus {
        background-color: var(--sidebar-item-hover-dark);
        color: var(--accent);
    }

    .pc-navbar .pc-link.active {
        background: var(--sidebar-item-active);
        color: var(--sidebar-item-active-color);
    }

    .pc-navbar .pc-micon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        margin-right: 0.75rem;
        font-size: 1.25rem;
    }

    /* Submenu */
    .pc-navbar .pc-submenu {
        padding-left: 2.5rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .pc-navbar .pc-hasmenu.active .pc-submenu {
        max-height: 500px;
    }

    .pc-navbar .pc-arrow {
        transition: transform 0.3s ease;
    }

    .pc-navbar .pc-hasmenu.active .pc-arrow {
        transform: rotate(180deg);
    }

    /* Card styles */
    .card {
        border-radius: 1rem;
        border: none;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 1.5rem;
        background-color: var(--card-bg);
    }

    .dark .card {
        background-color: var(--card-bg-dark);
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: var(--primary);
        font-weight: 600;
    }

    /* Product card */
    .product-card {
        border-radius: 1rem;
        overflow: hidden;
        height: 100%;
    }

    .product-card .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    /* Like button */
    .like-btn {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        color: var(--primary);
        border: 1px solid var(--accent);
        transition: all 0.3s ease;
    }

    .like-btn:hover {
        background-color: var(--accent-light);
        color: var(--primary);
    }

    .like-btn.active {
        background-color: var(--primary);
        color: white;
    }

    /* Button styles */
    .btn-primary {
        background: var(--header-bg);
        border: none;
        color: white;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        box-shadow: 0 4px 12px rgba(109, 40, 217, 0.5);
    }

    .btn-outline-primary {
        border: 2px solid var(--primary);
        color: var(--primary);
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: var(--primary);
        color: white;
    }

    /* Badge styles */
    .badge {
        padding: 0.35em 0.65em;
        border-radius: 0.375rem;
    }

    .bg-primary {
        background-color: var(--primary) !important;
    }

    .bg-secondary {
        background-color: var(--secondary) !important;
    }

    .bg-success {
        background-color: var(--success) !important;
    }

    .bg-warning {
        background-color: var(--warning) !important;
    }

    .bg-danger {
        background-color: var(--danger) !important;
    }

    .bg-accent {
        background-color: var(--accent) !important;
    }

    .text-primary {
        color: var(--primary) !important;
    }

    /* Input fields */
    .form-control {
        border-radius: 0.5rem;
        border: 1px solid var(--gray-300);
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(109, 40, 217, 0.25);
    }

    .dark .form-control {
        background-color: var(--gray-700);
        border-color: var(--gray-600);
        color: var(--gray-200);
    }

    /* Modal styles */
    .modal-content {
        border-radius: 1rem;
        border: none;
        overflow: hidden;
    }

    .modal-header {
        background: var(--header-bg);
        color: white;
        border-bottom: none;
    }

    /* User profile card */
    .user-avtar {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Footer styles */
    .pc-footer {
        background-color: var(--sidebar-bg);
        border-radius: 0.5rem;
        margin: 0.5rem;
        padding: 1rem;
        box-shadow: var(--card-shadow);
    }

    .dark .pc-footer {
        background-color: var(--sidebar-bg-dark);
    }

    /* Background gradient utility classes */
    .bg-gradient-primary {
        background: var(--header-bg);
    }

    /* Animation utilities */
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Back to top button */
    #back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--header-bg);
        color: white;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 999;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    #back-to-top:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Loading overlay */
    #loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--body-bg);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.3s ease;
    }

    .dark #loading-overlay {
        background-color: var(--body-bg-dark);
    }

    .spinner {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* RTL specific adjustments */
    [dir="rtl"] .pc-navbar .pc-micon {
        margin-right: 0;
        margin-left: 0.75rem;
    }

    [dir="rtl"] .pc-navbar .pc-submenu {
        padding-left: 0;
        padding-right: 2.5rem;
    }

    [dir="rtl"] #back-to-top {
        right: auto;
        left: 20px;
    }
</style>
