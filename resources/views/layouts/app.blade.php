<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #0a0a0a;
            font-family: 'Nunito', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(45deg, #8b5cf6, #ec4899, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(139, 92, 246, 0.15);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #8b5cf6;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hamburger-button {
            position: relative;
            width: 32px;
            height: 32px;
            padding: 6px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            display: none;
        }

        @media (max-width: 767px) {
            .hamburger-button {
                display: flex;
            }
        }

        .hamburger-button:hover {
            background-color: rgba(139, 92, 246, 0.1);
        }

        .hamburger-button:active {
            transform: scale(0.95);
        }

        .hamburger-line {
            display: block;
            position: absolute;
            width: 20px;
            height: 2px;
            background: currentColor;
            border-radius: 1px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            left: 50%;
            transform: translateX(-50%);
        }

        .hamburger-line:nth-child(1) {
            top: 8px;
        }

        .hamburger-line:nth-child(2) {
            top: 15px;
        }

        .hamburger-line:nth-child(3) {
            top: 22px;
        }

        .hamburger-button.active .hamburger-line:nth-child(1) {
            top: 15px;
            transform: translateX(-50%) rotate(45deg);
        }

        .hamburger-button.active .hamburger-line:nth-child(2) {
            opacity: 0;
            transform: translateX(-50%) scaleX(0);
        }

        .hamburger-button.active .hamburger-line:nth-child(3) {
            top: 15px;
            transform: translateX(-50%) rotate(-45deg);
        }

        /* Mobile Navigation Styles */
        .mobile-nav-link {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(0);
            opacity: 1;
        }

        .mobile-nav-link:hover {
            transform: translateX(8px);
            background: linear-gradient(90deg, rgba(139, 92, 246, 0.1), rgba(236, 72, 153, 0.1));
        }

        /* Mobile Menu Animation */
        #mobile-menu {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: top center;
            overflow: hidden;
        }

        #mobile-menu.hidden {
            opacity: 0;
            transform: translateY(-20px) scaleY(0.8);
            max-height: 0;
            pointer-events: none;
        }

        #mobile-menu:not(.hidden) {
            opacity: 1;
            transform: translateY(0) scaleY(1);
            max-height: 500px;
            pointer-events: auto;
        }

        /* Staggered Animation for Menu Items */
        .mobile-nav-link {
            animation-fill-mode: both;
        }

        #mobile-menu:not(.hidden) .mobile-nav-link:nth-child(1) {
            animation: slideInLeft 0.4s ease-out 0.1s;
        }

        #mobile-menu:not(.hidden) .mobile-nav-link:nth-child(2) {
            animation: slideInLeft 0.4s ease-out 0.15s;
        }

        #mobile-menu:not(.hidden) .mobile-nav-link:nth-child(3) {
            animation: slideInLeft 0.4s ease-out 0.2s;
        }

        #mobile-menu:not(.hidden) .mobile-nav-link:nth-child(4) {
            animation: slideInLeft 0.4s ease-out 0.25s;
        }

        #mobile-menu:not(.hidden) .mobile-nav-link:nth-child(5) {
            animation: slideInLeft 0.4s ease-out 0.3s;
        }

        #mobile-menu:not(.hidden) .social-section {
            animation: fadeInUp 0.5s ease-out 0.4s both;
        }

        #mobile-menu:not(.hidden) .cta-section {
            animation: fadeInUp 0.5s ease-out 0.5s both;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Backdrop Animation */
        .mobile-menu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 40;
            transition: all 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        .mobile-menu-backdrop.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Enhanced Menu Container */
        .mobile-menu-container {
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.95), rgba(31, 41, 55, 0.95));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(75, 85, 99, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8);
        }

        /* Pulse Effect for Active State */
        .hamburger-button.active {
            animation: pulse 0.6s ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #7c3aed, #db2777);
        }

        /* Mobile Specific Adjustments */
        @media (max-width: 640px) {
            .hamburger-button {
                width: 28px;
                height: 28px;
                padding: 4px;
            }

            .hamburger-line {
                width: 18px;
                height: 2px;
            }

            .hamburger-line:nth-child(1) {
                top: 6px;
            }

            .hamburger-line:nth-child(2) {
                top: 13px;
            }

            .hamburger-line:nth-child(3) {
                top: 20px;
            }

            .hamburger-button.active .hamburger-line:nth-child(1),
            .hamburger-button.active .hamburger-line:nth-child(3) {
                top: 13px;
            }
        }

        /* Mobile responsiveness */
        @media (max-width: 640px) {
            .hero-title {
                font-size: 2rem;
                line-height: 1.2;
            }

            .mobile-spacing {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mobile-card {
                margin-bottom: 1.5rem;
            }

            .mobile-button {
                padding: 0.75rem 1.5rem;
                font-size: 0.875rem;
            }

            .mobile-text {
                font-size: 0.875rem;
                line-height: 1.5;
            }

            .mobile-nav {
                padding: 0.75rem 1rem;
            }
        }

        @media (max-width: 768px) {
            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .project-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .section-spacing {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .hero-spacing {
                padding-top: 6rem;
                padding-bottom: 2rem;
            }
        }

        @media (min-width: 640px) and (max-width: 768px) {
            .tech-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.25rem;
            }
        }

        /* Touch-friendly buttons */
        @media (max-width: 768px) {
            .touch-button {
                min-height: 44px;
                min-width: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        @media (max-width: 640px) {
            body {
                font-size: 14px;
            }

            h1 {
                font-size: 1.875rem;
                line-height: 1.25;
            }

            h2 {
                font-size: 1.5rem;
                line-height: 1.3;
            }

            h3 {
                font-size: 1.25rem;
                line-height: 1.4;
            }
        }

        @media (min-width: 768px) {
            .hamburger-button {
                display: none !important;
            }

            #mobile-menu {
                display: none !important;
            }
        }
    </style>
</head>

<body class="text-white">
    <!-- Mobile Menu Backdrop -->
    <div id="mobile-menu-backdrop" class="mobile-menu-backdrop"></div>

    @yield('content')

    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
            let isMenuOpen = false;

            if (mobileMenuButton && mobileMenu) {

                function toggleMenu() {
                    isMenuOpen = !isMenuOpen;

                    // Toggle button animation
                    mobileMenuButton.classList.toggle('active', isMenuOpen);
                    mobileMenuButton.setAttribute('aria-expanded', isMenuOpen.toString());

                    if (isMenuOpen) {
                        // Show menu
                        mobileMenu.classList.remove('hidden');
                        mobileMenuBackdrop.classList.add('active');

                        const menuItems = mobileMenu.querySelectorAll('.mobile-nav-link');
                        menuItems.forEach((item, index) => {
                            item.style.animationDelay = `${0.1 + (index * 0.05)}s`;
                        });

                        // Prevent body scroll
                        document.body.style.overflow = 'hidden';

                    } else {
                        // Hide menu
                        mobileMenu.classList.add('hidden');
                        mobileMenuBackdrop.classList.remove('active');

                        // Re-enable body scroll
                        document.body.style.overflow = '';
                    }
                }

                // Button click handler
                mobileMenuButton.addEventListener('click', function (e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                // Close menu when clicking on nav links
                const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        setTimeout(() => {
                            if (isMenuOpen) {
                                toggleMenu();
                            }
                        }, 150);
                    });
                });

                // Close menu when clicking on backdrop
                mobileMenuBackdrop.addEventListener('click', function () {
                    if (isMenuOpen) {
                        toggleMenu();
                    }
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function (event) {
                    const isClickInsideMenu = mobileMenu.contains(event.target);
                    const isClickOnButton = mobileMenuButton.contains(event.target);

                    if (!isClickInsideMenu && !isClickOnButton && isMenuOpen) {
                        toggleMenu();
                    }
                });

                // Handle escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && isMenuOpen) {
                        toggleMenu();
                    }
                });
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // scroll effect for navbar
        let lastScrollTop = 0;
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('nav');
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (navbar) {
                if (currentScroll > 100) {
                    navbar.classList.add('bg-opacity-95');
                    navbar.style.backdropFilter = 'blur(20px)';
                } else {
                    navbar.classList.remove('bg-opacity-95');
                    navbar.style.backdropFilter = 'blur(8px)';
                }
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        });

        // Touch-friendly interactions for mobile
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }

        // Close mobile menu on window resize
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 768) {
                const mobileMenu = document.getElementById('mobile-menu');
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    if (mobileMenuButton) {
                        mobileMenuButton.classList.remove('active');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }
                    if (mobileMenuBackdrop) {
                        mobileMenuBackdrop.classList.remove('active');
                    }
                    document.body.style.overflow = '';
                    isMenuOpen = false;
                }
            }
        });

        // Add loading animation
        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for scroll animations
        document.querySelectorAll('.card-hover').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>

</html>