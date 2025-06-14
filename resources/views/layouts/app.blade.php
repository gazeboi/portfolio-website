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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

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

        /* Mobile Navigation Styles */
        .mobile-nav-link {
            transition: all 0.3s ease;
        }

        .mobile-nav-link:hover {
            transform: translateX(8px);
        }

        /* Mobile Menu Animation */
        #mobile-menu {
            transition: all 0.3s ease;
            transform-origin: top;
        }

        #mobile-menu.hidden {
            opacity: 0;
            transform: scaleY(0);
        }

        #mobile-menu:not(.hidden) {
            opacity: 1;
            transform: scaleY(1);
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

        /* Enhanced Mobile responsiveness */
        @media (max-width: 640px) {
            .hero-title {
                font-size: 2rem;
                line-height: 1.2;
            }

            /* Better spacing for mobile */
            .mobile-spacing {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            /* Improved card spacing */
            .mobile-card {
                margin-bottom: 1.5rem;
            }

            /* Better button sizing */
            .mobile-button {
                padding: 0.75rem 1.5rem;
                font-size: 0.875rem;
            }

            /* Improved text sizing */
            .mobile-text {
                font-size: 0.875rem;
                line-height: 1.5;
            }

            /* Better navigation spacing */
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

            /* Improved section spacing */
            .section-spacing {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            /* Better hero section spacing */
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
            }
        }

        /* Improved readability on mobile */
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
    </style>
</head>

<body class="text-white">
    @yield('content')

    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                    hamburgerIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });

                // Close mobile menu when clicking on nav links
                const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        mobileMenu.classList.add('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    });
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function (event) {
                    const isClickInsideMenu = mobileMenu.contains(event.target);
                    const isClickOnButton = mobileMenuButton.contains(event.target);

                    if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
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
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('nav');
            if (navbar && window.scrollY > 100) {
                navbar.classList.add('bg-opacity-95');
            } else if (navbar) {
                navbar.classList.remove('bg-opacity-95');
            }
        });

        // Touch-friendly interactions for mobile
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }

        // Close mobile menu on window resize
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 768) {
                const mobileMenu = document.getElementById('mobile-menu');
                const hamburgerIcon = document.getElementById('hamburger-icon');
                const closeIcon = document.getElementById('close-icon');

                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        });
    </script>
</body>

</html>