@extends('layouts.app')

@section('title', 'Dionisius Surya Jaya - Portfolio')

@section('content')
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black bg-opacity-90 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="text-lg sm:text-xl font-bold">
                    <span class="text-purple-400">{</span><span class="text-blue-400">midas79</span><span
                        class="text-purple-400">}</span>
                    <span class="text-gray-300 ml-2 hidden sm:inline">Portfolio</span>
                </div>

                <!-- Desktop Navigation -->
                <ul class="hidden md:flex space-x-6 lg:space-x-8">
                    <li><a href="#home" class="nav-link text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="#about" class="nav-link text-gray-300 hover:text-white">About</a></li>
                    <li><a href="#tech" class="nav-link text-gray-300 hover:text-white">Tech Stack</a></li>
                    <li><a href="#projects" class="nav-link text-gray-300 hover:text-white">Projects</a></li>
                    <li><a href="#contact" class="nav-link text-gray-300 hover:text-white">Contact</a></li>
                </ul>

                <!-- Desktop Social Links -->
                <div class="hidden md:flex space-x-3 sm:space-x-4">
                    <a href="{{ $profile['github'] }}" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-github text-lg sm:text-xl"></i>
                    </a>
                    <a href="{{ $profile['facebook'] }}" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-facebook text-lg sm:text-xl"></i>
                    </a>
                    <a href="{{ $profile['instagram'] }}" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-instagram text-lg sm:text-xl"></i>
                    </a>
                    <a href="{{ $profile['linkedin'] }}" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-linkedin text-lg sm:text-xl"></i>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button"
                    class="block md:hidden text-gray-300 hover:text-white focus:outline-none focus:text-white transition-colors duration-300 hamburger-button touch-button"
                    aria-label="Toggle mobile menu" aria-expanded="false">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="block md:hidden hidden" role="menu">
                <div class="mobile-menu-container px-2 pt-4 pb-6 space-y-1 rounded-lg mt-4">
                    <!-- Mobile Navigation Links -->
                    <a href="#home"
                        class="mobile-nav-link block px-4 py-3 text-gray-300 hover:text-white rounded-lg transition duration-300"
                        role="menuitem">
                        <i class="fas fa-home mr-3 text-purple-400"></i>Home
                    </a>
                    <a href="#about"
                        class="mobile-nav-link block px-4 py-3 text-gray-300 hover:text-white rounded-lg transition duration-300"
                        role="menuitem">
                        <i class="fas fa-user mr-3 text-blue-400"></i>About
                    </a>
                    <a href="#tech"
                        class="mobile-nav-link block px-4 py-3 text-gray-300 hover:text-white rounded-lg transition duration-300"
                        role="menuitem">
                        <i class="fas fa-code mr-3 text-green-400"></i>Tech Stack
                    </a>
                    <a href="#projects"
                        class="mobile-nav-link block px-4 py-3 text-gray-300 hover:text-white rounded-lg transition duration-300"
                        role="menuitem">
                        <i class="fas fa-folder mr-3 text-yellow-400"></i>Projects
                    </a>
                    <a href="#contact"
                        class="mobile-nav-link block px-4 py-3 text-gray-300 hover:text-white rounded-lg transition duration-300"
                        role="menuitem">
                        <i class="fas fa-envelope mr-3 text-pink-400"></i>Contact
                    </a>

                    <!-- Mobile Social Links -->
                    <div class="social-section pt-4 border-t border-gray-700 mt-4">
                        <p class="px-4 text-sm text-gray-400 mb-3">Connect with me</p>
                        <div class="flex justify-center space-x-6">
                            <a href="{{ $profile['github'] }}" target="_blank"
                                class="text-gray-400 hover:text-white transition duration-300 hover:scale-110"
                                aria-label="GitHub">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="{{ $profile['facebook'] }}" target="_blank"
                                class="text-gray-400 hover:text-white transition duration-300 hover:scale-110"
                                aria-label="Facebook">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                            <a href="{{ $profile['instagram'] }}" target="_blank"
                                class="text-gray-400 hover:text-white transition duration-300 hover:scale-110"
                                aria-label="Instagram">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                            <a href="{{ $profile['linkedin'] }}" target="_blank"
                                class="text-gray-400 hover:text-white transition duration-300 hover:scale-110"
                                aria-label="LinkedIn">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Mobile CTA Button -->
                    <div class="cta-section pt-4">
                        <a href="mailto:{{ $profile['email'] }}"
                            class="block bg-gradient-to-r from-purple-500 to-pink-500 px-4 py-3 rounded-lg font-semibold hover:opacity-90 transition duration-300 text-center">
                            <i class="fas fa-paper-plane mr-2"></i>Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center px-4 sm:px-6 pt-24 sm:pt-20">
        <div class="container mx-auto max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Content -->
                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 sm:mb-8">
                        <div class="text-gray-300 mb-3 sm:mb-2 text-base sm:text-lg md:text-xl">{{ $profile['greeting'] }}
                        </div>
                        <div class="gradient-text leading-tight">{{ $profile['name'] }}</div>
                        <div class="text-gray-300 text-2xl sm:text-3xl md:text-4xl lg:text-5xl mt-3 sm:mt-2 leading-tight">
                            {{ $profile['title'] }}
                        </div>
                    </h1>
                    <p
                        class="text-gray-400 text-base sm:text-lg mb-8 sm:mb-10 leading-relaxed max-w-lg mx-auto lg:mx-0 px-2 sm:px-0">
                        {{ $profile['description'] }}
                    </p>

                    <!-- Updated CTA Buttons with CV Download -->
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 px-4 sm:px-0">
                        <a href="#projects"
                            class="bg-gradient-to-r from-purple-500 to-pink-500 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:opacity-90 transition duration-300 text-center text-sm sm:text-base">
                            View Projects
                        </a>

                        <!-- Download CV Button -->
                        @if(file_exists(public_path($profile['cv_path'] ?? '')))
                            <a href="{{ asset($profile['cv_path']) }}" download="Dionisius_Surya_Jaya_CV.pdf"
                                class="border border-gray-600 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:border-white hover:bg-white hover:text-black transition duration-300 text-center flex items-center justify-center text-sm sm:text-base">
                                <i class="fas fa-download mr-2"></i>
                                Download CV
                            </a>
                        @else
                            <a href="#contact"
                                class="border border-gray-600 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:border-white transition duration-300 text-center text-sm sm:text-base">
                                Contact Me
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Right Content - Profile Image -->
                <div class="flex justify-center order-1 lg:order-2 mb-8 lg:mb-0">
                    <div class="relative">
                        <div
                            class="w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 lg:w-96 lg:h-96 rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 p-1">
                            <div
                                class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('images/profile.png') }}" alt="{{ $profile['name'] }} Profile"
                                    class="w-full h-full rounded-full object-cover scale-90"
                                    onerror="this.src='https://github.com/midas79/portfolio-website/blob/2510bdacda046d695d984622fc4c26220069e2c9/public/images/profile.png">
                            </div>
                        </div>
                        <!-- Floating elements -->
                        <div
                            class="absolute -top-4 -right-4 w-6 h-6 sm:w-8 sm:h-8 bg-purple-500 rounded-full animate-bounce">
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-4 h-4 sm:w-6 sm:h-6 bg-pink-500 rounded-full animate-pulse">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 sm:py-20 px-4 sm:px-6 bg-gray-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-72 h-72 bg-pink-500 rounded-full filter blur-3xl"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-white">{{ $profile['about']['title'] }}</h2>
                <p class="text-gray-400 text-sm sm:text-base">{{ $profile['about']['subtitle'] }}</p>
            </div>

            <div class="grid lg:grid-cols-5 gap-6 sm:gap-8">
                <!-- Main About Content -->
                <div class="lg:col-span-3">
                    <div class="bg-gray-800 rounded-2xl p-6 sm:p-8 card-hover border border-gray-700 h-full">
                        <div class="flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-6">
                            <!-- Profile Icon -->
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0 mx-auto sm:mx-0">
                                <i class="fas fa-user text-white text-lg sm:text-xl"></i>
                            </div>

                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="text-xl sm:text-2xl font-bold text-white mb-4">Who am I?</h3>
                                <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8">
                                    {{ $profile['about']['content'] }}
                                </p>

                                <!-- Stats Grid -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
                                    <div class="text-center">
                                        <div class="text-xl sm:text-2xl md:text-3xl font-bold gradient-text mb-1">
                                            {{ count($projects) }}+
                                        </div>
                                        <div class="text-gray-400 text-xs sm:text-sm">Projects</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-xl sm:text-2xl md:text-3xl font-bold gradient-text mb-1">
                                            {{ count($skills['Programming Languages']) }}+
                                        </div>
                                        <div class="text-gray-400 text-xs sm:text-sm">Languages</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-xl sm:text-2xl md:text-3xl font-bold gradient-text mb-1">3+</div>
                                        <div class="text-gray-400 text-xs sm:text-sm">Years Learning</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-xl sm:text-2xl md:text-3xl font-bold gradient-text mb-1">∞</div>
                                        <div class="text-gray-400 text-xs sm:text-sm">Curiosity</div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <a href="{{ $profile['github'] }}" target="_blank"
                                    class="inline-flex items-center bg-gradient-to-r from-purple-500 to-pink-500 px-6 sm:px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition duration-300 text-sm sm:text-base">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    Explore My Work
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Cards -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Education Card -->
                    <div class="bg-gray-800 rounded-xl p-6 card-hover border border-gray-700">
                        <div class="text-center">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-graduation-cap text-white text-lg sm:text-xl"></i>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-white mb-3">Education</h3>
                            <p class="text-purple-400 font-medium text-sm sm:text-base">Computer Science</p>
                            <p class="text-gray-400 text-xs sm:text-sm">Brawijaya University</p>
                        </div>
                    </div>

                    <!-- Current Focus Card -->
                    <div class="bg-gray-800 rounded-xl p-6 card-hover border border-gray-700 flex-1">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-7 h-7 sm:w-8 sm:h-8 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-bullseye text-white text-xs sm:text-sm"></i>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-white">Current Focus</h3>
                        </div>
                        <div class="space-y-3">
                            @foreach($profile['about']['interests'] as $interest)
                                <div class="bg-gray-700 px-3 sm:px-4 py-2 rounded-lg">
                                    <span class="text-gray-300 text-xs sm:text-sm">{{ $interest }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech" class="py-16 sm:py-20 px-4 sm:px-6">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                    <span class="gradient-text">My Tech Stack</span>
                </h2>
                <p class="text-gray-400 text-sm sm:text-base">Technologies I've been working with recently</p>
            </div>

            @foreach($skills as $category => $skillList)
                <div class="mb-12 sm:mb-16 last:mb-0">
                    <h3 class="text-xl sm:text-2xl font-semibold mb-6 sm:mb-8 text-center text-white">{{ $category }}</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6">
                        @foreach($skillList as $skill)
                            <div
                                class="bg-gray-800 p-4 sm:p-6 rounded-lg text-center card-hover border border-gray-700 hover:border-gray-600 transition-all duration-300">
                                <i class="{{ $skill['icon'] }} text-3xl sm:text-4xl {{ $skill['color'] }} mb-2 sm:mb-3"></i>
                                <p class="text-xs sm:text-sm text-gray-300">{{ $skill['name'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 sm:py-20 px-4 sm:px-6 bg-gray-900">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                    <span class="gradient-text">Projects</span>
                </h2>
                <p class="text-gray-400 text-sm sm:text-base">Things I've built so far</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($projects as $project)
                    <div
                        class="bg-gray-800 rounded-xl overflow-hidden card-hover group border border-gray-700 hover:border-gray-600 transition-all duration-300">
                        <!-- Project Image -->
                        <div class="h-40 sm:h-48 relative overflow-hidden">
                            @if(file_exists(public_path('images/' . $project['image'])))
                                <!-- Jika image ada, tampilkan image -->
                                <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-20 transition duration-300">
                                </div>
                            @else
                                <!-- Jika image tidak ada, gunakan gradient -->
                                <div class="w-full h-full bg-gradient-to-br {{ $project['gradient'] }}">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition duration-300">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        @if(str_contains($project['title'], 'E-Commerce') || str_contains($project['title'], 'Eden'))
                                            <i class="fas fa-shopping-cart text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Task') || str_contains($project['title'], 'GeoTale'))
                                            <i class="fas fa-map-marked-alt text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Weather'))
                                            <i class="fas fa-cloud-sun text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Portfolio'))
                                            <i class="fas fa-user text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Blog'))
                                            <i class="fas fa-blog text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Machine'))
                                            <i class="fas fa-brain text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @else
                                            <i class="fas fa-code text-4xl sm:text-6xl text-white opacity-30"></i>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- Project overlay info -->
                            <div class="absolute top-3 sm:top-4 left-3 sm:left-4">
                                <span class="bg-black bg-opacity-60 px-2 sm:px-3 py-1 rounded-full text-xs text-white">
                                    {{ $project['tags'][0] ?? 'Web' }}
                                </span>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-5 sm:p-6">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-white">{{ $project['title'] }}</h3>
                            <p class="text-gray-400 text-xs sm:text-sm mb-4 leading-relaxed">{{ $project['description'] }}</p>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project['tags'] as $tag)
                                    <span class="bg-gray-700 px-2 py-1 rounded text-xs text-gray-300">{{ $tag }}</span>
                                @endforeach
                            </div>

                            <!-- Links -->
                            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                                <a href="{{ $project['github'] }}" target="_blank"
                                    class="flex items-center justify-center sm:justify-start text-gray-400 hover:text-white transition duration-300 text-center sm:text-left">
                                    <i class="fab fa-github mr-2"></i>
                                    <span class="text-xs sm:text-sm">View Code</span>
                                </a>
                                @if($project['demo'] !== '#')
                                    <a href="{{ $project['demo'] }}" target="_blank"
                                        class="flex items-center justify-center sm:justify-start text-gray-400 hover:text-white transition duration-300 text-center sm:text-left">
                                        <i class="fas fa-external-link-alt mr-2"></i>
                                        <span class="text-xs sm:text-sm">Live Demo</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 sm:py-20 px-4 sm:px-6">
        <div class="container mx-auto max-w-4xl text-center">
            <div class="mb-6 sm:mb-8">
                <span class="text-purple-400">{</span><span class="text-blue-400">midas79</span><span
                    class="text-purple-400">}</span>
                <span class="text-gray-300 ml-2 hidden sm:inline">Portfolio</span>
            </div>

            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Let's work together</h2>
            <p class="text-gray-400 mb-6 sm:mb-8 text-sm sm:text-lg max-w-2xl mx-auto px-4 sm:px-0">
                I'm always interested in new opportunities and interesting projects. Feel free to reach out!
            </p>

            <div class="flex justify-center space-x-6 sm:space-x-8 mb-6 sm:mb-8">
                <a href="{{ $profile['github'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-github text-2xl sm:text-3xl"></i>
                </a>
                <a href="{{ $profile['facebook'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-facebook text-2xl sm:text-3xl"></i>
                </a>
                <a href="{{ $profile['instagram'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-instagram text-2xl sm:text-3xl"></i>
                </a>
                <a href="{{ $profile['linkedin'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-linkedin text-2xl sm:text-3xl"></i>
                </a>
            </div>

            <a href="mailto:{{ $profile['email'] }}"
                class="bg-gradient-to-r from-purple-500 to-pink-500 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:opacity-90 transition duration-300 inline-block text-sm sm:text-lg">
                Get In Touch
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 sm:py-8 px-4 sm:px-6 border-t border-gray-800 bg-gray-900">
        <div class="container mx-auto text-center">
            <p class="text-gray-400 text-xs sm:text-sm">
                © 2025 <span class="gradient-text">{{ $profile['name'] }}</span> • Powered by ☕
            </p>
        </div>
    </footer>
@endsection