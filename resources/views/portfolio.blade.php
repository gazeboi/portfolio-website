@extends('layouts.app')

@section('title', 'Dionisius Surya Jaya - Web Developer Portfolio')

@section('content')
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black bg-opacity-90 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">
                    <span class="text-purple-400">{</span><span class="text-blue-400">midas79</span><span
                        class="text-purple-400">}</span>
                    <span class="text-gray-300 ml-2">Portfolio</span>
                </div>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="#home" class="nav-link text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="#about" class="nav-link text-gray-300 hover:text-white">About</a></li>
                    <li><a href="#tech" class="nav-link text-gray-300 hover:text-white">Tech Stack</a></li>
                    <li><a href="#projects" class="nav-link text-gray-300 hover:text-white">Projects</a></li>
                    <li><a href="#contact" class="nav-link text-gray-300 hover:text-white">Contact</a></li>
                </ul>
                <div class="flex space-x-4">
                    <a href="{{ $profile['github'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="{{ $profile['facebook'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="{{ $profile['instagram'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="{{ $profile['linkedin'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center px-6 pt-20">
        <div class="container mx-auto max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="order-2 lg:order-1">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        <div class="text-gray-300 mb-2 text-lg md:text-xl">{{ $profile['greeting'] }}</div>
                        <div class="gradient-text">{{ $profile['name'] }}</div>
                        <div class="text-gray-300 text-3xl md:text-4xl lg:text-5xl mt-2">{{ $profile['title'] }}</div>
                    </h1>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed max-w-lg">
                        {{ $profile['description'] }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#projects"
                            class="bg-gradient-to-r from-purple-500 to-pink-500 px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition duration-300 text-center">
                            View Projects
                        </a>
                        <a href="#contact"
                            class="border border-gray-600 px-8 py-3 rounded-lg font-semibold hover:border-white transition duration-300 text-center">
                            Contact Me
                        </a>
                    </div>
                </div>

                <!-- Right Content - Profile Image -->
                <div class="flex justify-center order-1 lg:order-2">
                    <div class="relative">
                        <div
                            class="w-72 h-72 md:w-80 md:h-80 lg:w-96 lg:h-96 rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 p-1">
                            <div
                                class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center overflow-hidden">
                                <img src="https://github.com/midas79/midas79/blob/main/halfdead.png?raw=true" alt="Profile"
                                    class="w-full h-full rounded-full object-cover scale-90">
                            </div>
                        </div>
                        <!-- Floating elements -->
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-purple-500 rounded-full animate-bounce"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-pink-500 rounded-full animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6 bg-gray-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-72 h-72 bg-pink-500 rounded-full filter blur-3xl"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 text-white">{{ $profile['about']['title'] }}</h2>
                <p class="text-gray-400">{{ $profile['about']['subtitle'] }}</p>
            </div>

            <div class="grid lg:grid-cols-5 gap-8">
                <!-- Main About Content -->
                <div class="lg:col-span-3">
                    <div class="bg-gray-800 rounded-2xl p-8 card-hover border border-gray-700 h-full">
                        <div class="flex items-start space-x-6">
                            <!-- Profile Icon -->
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-white text-xl"></i>
                            </div>

                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-white mb-4">Who am I?</h3>
                                <p class="text-gray-300 text-base leading-relaxed mb-8">
                                    {{ $profile['about']['content'] }}
                                </p>

                                <!-- Stats Grid -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                                    <div class="text-center">
                                        <div class="text-2xl md:text-3xl font-bold gradient-text mb-1">
                                            {{ count($projects) }}+</div>
                                        <div class="text-gray-400 text-xs md:text-sm">Projects</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl md:text-3xl font-bold gradient-text mb-1">
                                            {{ count($skills['Programming Languages']) }}+</div>
                                        <div class="text-gray-400 text-xs md:text-sm">Languages</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl md:text-3xl font-bold gradient-text mb-1">3+</div>
                                        <div class="text-gray-400 text-xs md:text-sm">Years Learning</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl md:text-3xl font-bold gradient-text mb-1">∞</div>
                                        <div class="text-gray-400 text-xs md:text-sm">Curiosity</div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <a href="{{ $profile['github'] }}" target="_blank"
                                    class="inline-flex items-center bg-gradient-to-r from-purple-500 to-pink-500 px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition duration-300">
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
                                class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-graduation-cap text-white text-xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-3">Education</h3>
                            <p class="text-purple-400 font-medium text-base">Computer Science</p>
                            <p class="text-gray-400 text-sm">Brawijaya University</p>
                        </div>
                    </div>

                    <!-- Current Focus Card -->
                    <div class="bg-gray-800 rounded-xl p-6 card-hover border border-gray-700 flex-1">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-bullseye text-white text-sm"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-white">Current Focus</h3>
                        </div>
                        <div class="space-y-3">
                            @foreach($profile['about']['interests'] as $interest)
                                <div class="bg-gray-700 px-4 py-2 rounded-lg">
                                    <span class="text-gray-300 text-sm">{{ $interest }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech" class="py-20 px-6">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">My Tech Stack</span>
                </h2>
                <p class="text-gray-400">Technologies I've been working with recently</p>
            </div>

            @foreach($skills as $category => $skillList)
                <div class="mb-16 last:mb-0">
                    <h3 class="text-2xl font-semibold mb-8 text-center text-white">{{ $category }}</h3>
                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                        @foreach($skillList as $skill)
                            <div
                                class="bg-gray-800 p-6 rounded-lg text-center card-hover border border-gray-700 hover:border-gray-600 transition-all duration-300">
                                <i class="{{ $skill['icon'] }} text-4xl {{ $skill['color'] }} mb-3"></i>
                                <p class="text-sm text-gray-300">{{ $skill['name'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-6 bg-gray-900">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Projects</span>
                </h2>
                <p class="text-gray-400">Things I've built so far</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div
                        class="bg-gray-800 rounded-xl overflow-hidden card-hover group border border-gray-700 hover:border-gray-600 transition-all duration-300">
                        <!-- Project Image -->
                        <div class="h-48 relative overflow-hidden">
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
                                            <i class="fas fa-shopping-cart text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Task') || str_contains($project['title'], 'GeoTale'))
                                            <i class="fas fa-map-marked-alt text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Weather'))
                                            <i class="fas fa-cloud-sun text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Portfolio'))
                                            <i class="fas fa-user text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Blog'))
                                            <i class="fas fa-blog text-6xl text-white opacity-30"></i>
                                        @elseif(str_contains($project['title'], 'Machine'))
                                            <i class="fas fa-brain text-6xl text-white opacity-30"></i>
                                        @else
                                            <i class="fas fa-code text-6xl text-white opacity-30"></i>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- Project overlay info -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-black bg-opacity-60 px-3 py-1 rounded-full text-xs text-white">
                                    {{ $project['tags'][0] ?? 'Web' }}
                                </span>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 text-white">{{ $project['title'] }}</h3>
                            <p class="text-gray-400 text-sm mb-4 leading-relaxed">{{ $project['description'] }}</p>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project['tags'] as $tag)
                                    <span class="bg-gray-700 px-2 py-1 rounded text-xs text-gray-300">{{ $tag }}</span>
                                @endforeach
                            </div>

                            <!-- Links -->
                            <div class="flex space-x-4">
                                <a href="{{ $project['github'] }}" target="_blank"
                                    class="flex items-center text-gray-400 hover:text-white transition duration-300">
                                    <i class="fab fa-github mr-2"></i>
                                    <span class="text-sm">View Code</span>
                                </a>
                                @if($project['demo'] !== '#')
                                    <a href="{{ $project['demo'] }}" target="_blank"
                                        class="flex items-center text-gray-400 hover:text-white transition duration-300">
                                        <i class="fas fa-external-link-alt mr-2"></i>
                                        <span class="text-sm">Live Demo</span>
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
    <section id="contact" class="py-20 px-6">
        <div class="container mx-auto max-w-4xl text-center">
            <div class="mb-8">
                <span class="text-purple-400">{</span><span class="text-blue-400">midas79</span><span
                    class="text-purple-400">}</span>
                <span class="text-gray-300 ml-2">Portfolio</span>
            </div>

            <h2 class="text-4xl font-bold mb-4">Let's work together</h2>
            <p class="text-gray-400 mb-8 text-lg max-w-2xl mx-auto">
                I'm always interested in new opportunities and interesting projects. Feel free to reach out!
            </p>

            <div class="flex justify-center space-x-6 mb-8">
                <a href="{{ $profile['github'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-github text-3xl"></i>
                </a>
                <a href="{{ $profile['facebook'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-facebook text-3xl"></i>
                </a>
                <a href="{{ $profile['instagram'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-instagram text-3xl"></i>
                </a>
                <a href="{{ $profile['linkedin'] }}" target="_blank"
                    class="text-gray-400 hover:text-white transition duration-300 hover:scale-110">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>

            <a href="mailto:{{ $profile['email'] }}"
                class="bg-gradient-to-r from-purple-500 to-pink-500 px-8 py-4 rounded-lg font-semibold hover:opacity-90 transition duration-300 inline-block text-lg">
                Get In Touch
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-6 border-t border-gray-800 bg-gray-900">
        <div class="container mx-auto text-center">
            <p class="text-gray-400 text-sm">
                © 2025 <span class="gradient-text">{{ $profile['name'] }}</span> • Built with ❤️ and ☕
            </p>
        </div>
    </footer>
@endsection