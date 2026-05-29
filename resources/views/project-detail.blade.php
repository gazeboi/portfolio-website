@extends('layouts.app')

@section('title', $project['title'] . ' - Raikhan Geza Alburama')

@section('content')

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black bg-opacity-90 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4">
            <div class="flex justify-between items-center">
                <div class="text-lg sm:text-xl font-bold">
                    <a href="{{ url('/') }}" class="text-gray-300 ml-2 hidden sm:inline hover:text-white transition">Portofolio</a>
                </div>
                <a href="{{ url('/') }}#projects"
                    class="flex items-center text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Projects
                </a>
            </div>
        </div>
    </nav>

    <!-- Detail Content -->
    <div class="min-h-screen pt-20 pb-16 px-4 sm:px-6 bg-gray-950 text-white">
        <div class="container mx-auto max-w-4xl">

            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-sm text-gray-500 mb-8 pt-6">
                <a href="{{ url('/') }}" class="hover:text-gray-300 transition">Home</a>
                <span>/</span>
                <a href="{{ url('/') }}#projects" class="hover:text-gray-300 transition">Projects</a>
                <span>/</span>
                <span class="text-gray-300">{{ $project['title'] }}</span>
            </div>

            <!-- Header -->
            <div class="mb-8">
                <span class="inline-block bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-xs font-medium mb-4">
                    {{ $project['tags'][0] ?? 'Project' }}
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 gradient-text">
                    {{ $project['title'] }}
                </h1>
                <p class="text-gray-400 text-base sm:text-lg leading-relaxed max-w-2xl">
                    {{ $project['description'] }}
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mb-10">
                @if(isset($project['github']) && $project['github'] !== '#')
                    <a href="{{ $project['github'] }}" target="_blank"
                        class="flex items-center bg-gray-800 hover:bg-gray-700 border border-gray-700 px-5 py-3 rounded-lg font-medium transition duration-300 text-sm">
                        <i class="fab fa-github mr-2 text-lg"></i> View Code
                    </a>
                @endif
                @if(isset($project['demo']) && $project['demo'] !== '#')
                    <a href="{{ $project['demo'] }}" target="_blank"
                        class="flex items-center bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 px-5 py-3 rounded-lg font-medium transition duration-300 text-sm">
                        <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                    </a>
                @endif
            </div>

            <!-- Gambar Utama -->
            <div class="rounded-2xl overflow-hidden mb-6 border border-gray-800">
                @if(file_exists(public_path('images/' . $project['image'])))
                    <img src="{{ asset('images/' . $project['image']) }}"
                        alt="{{ $project['title'] }}"
                        class="w-full object-cover cursor-pointer hover:opacity-90 transition duration-300"
                        onclick="openModal('{{ asset('images/' . $project['image']) }}')">
                @else
                    <div class="w-full h-64 sm:h-80 bg-gradient-to-br {{ $project['gradient'] }} flex items-center justify-center">
                        <i class="fas fa-code text-6xl text-white opacity-30"></i>
                    </div>
                @endif
            </div>

            <!-- Gallery (Gambar Tambahan) -->
            @if(isset($project['images']) && count($project['images']) > 0)
                <div class="mb-10">
                    <h2 class="text-lg font-semibold text-white mb-4">
                        <i class="fas fa-images mr-2 text-purple-400"></i>Gallery
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($project['images'] as $img)
                            <div class="rounded-xl overflow-hidden border border-gray-800 cursor-pointer group"
                                 onclick="openModal('{{ asset('images/' . $img) }}')">
                                @if(file_exists(public_path('images/' . $img)))
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('images/' . $img) }}"
                                             alt="Gallery {{ $project['title'] }}"
                                             class="w-full object-cover group-hover:scale-105 transition duration-300">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                                            <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                                        </div>
                                    </div>
                                @else
                                    <div class="w-full h-48 bg-gray-800 flex items-center justify-center rounded-xl">
                                        <span class="text-gray-500 text-sm">Gambar tidak ditemukan</span>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Tags -->
            <div class="mb-10">
                <h2 class="text-lg font-semibold text-white mb-4">Tech Stack</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($project['tags'] as $tag)
                        <span class="bg-gray-800 border border-gray-700 px-3 py-1.5 rounded-lg text-sm text-gray-300">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Detail Content -->
            <div class="mb-12">
                <h2 class="text-lg font-semibold text-white mb-4">About This Project</h2>
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 sm:p-8 text-gray-300 leading-relaxed text-sm sm:text-base">
                    {!! $project['detail'] !!}
                </div>
            </div>

            <!-- Back Button -->
            <div class="border-t border-gray-800 pt-8">
                <a href="{{ url('/') }}#projects"
                    class="inline-flex items-center text-purple-400 hover:text-purple-300 transition duration-300 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Back to All Projects
                </a>
            </div>

        </div>
    </div>

    <!-- Modal Zoom Gambar -->
    <div id="imgModal"
         class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4"
         onclick="closeModal()">
        <div class="relative max-w-5xl w-full">
            <button onclick="closeModal()"
                class="absolute -top-10 right-0 text-white text-2xl hover:text-gray-300 transition">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalImg" src="" alt="Preview"
                 class="w-full max-h-screen object-contain rounded-xl shadow-2xl">
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-6 sm:py-8 px-4 sm:px-6 border-t border-gray-800 bg-gray-900">
        <div class="container mx-auto text-center">
            <p class="text-gray-400 text-xs sm:text-sm">
                © 2025 <span class="gradient-text">Raikhan Geza Alburama</span> • Powered by ⚡
            </p>
        </div>
    </footer>

    <script>
        function openModal(src) {
            document.getElementById('modalImg').src = src;
            const modal = document.getElementById('imgModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('imgModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });
    </script>

@endsection