<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Dionisius Surya Jaya',
            'title' => 'I build things for web',
            'greeting' => 'Hi 👋, My name is',
            'description' => 'Computer Science Student at Brawijaya University passionate about creating innovative web solutions',
            'cv_path' => 'cv/Dionisius_Surya_Jaya_CV.pdf',
            'about' => [
                'title' => 'About Me',
                'subtitle' => 'Get to know me better',
                'content' => 'I am an undergraduate Computer Science student at Brawijaya University with a strong passion for programming and software development. My goal is to become a professional programmer who not only writes clean and efficient code but also builds meaningful and impactful solutions. I am constantly seeking opportunities to learn new technologies, improve my skills, and contribute to real-world projects. You can explore some of my academic work and personal projects on my GitHub.',
                'highlights' => [
                    'Computer Science Student',
                    'Brawijaya University',
                    'Passionate Programmer'
                ],
                'interests' => [
                    'Web Development',
                    'Mobile Programming',
                    'Software Architecture'
                ]
            ],
            'github' => 'https://github.com/midas79',
            'facebook' => 'https://facebook.com/diavollllo',
            'instagram' => 'https://instagram.com/dionsaaurus',
            'email' => 'dionisius.suryajaya@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/dionisiussj/',
        ];

        $skills = [
            'Programming Languages' => [
                ['name' => 'Python', 'icon' => 'fab fa-python', 'color' => 'text-yellow-400'],
                ['name' => 'JavaScript', 'icon' => 'fab fa-js-square', 'color' => 'text-yellow-300'],
                ['name' => 'TypeScript', 'icon' => 'fab fa-js-square', 'color' => 'text-blue-400'],
                ['name' => 'Java', 'icon' => 'fab fa-java', 'color' => 'text-red-500'],
                ['name' => 'Kotlin', 'icon' => 'fab fa-android', 'color' => 'text-green-500'],
                ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => 'text-purple-400']
            ],
            'Frameworks & Tools' => [
                ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => 'text-red-400'],
                ['name' => 'React', 'icon' => 'fab fa-react', 'color' => 'text-blue-400'],
                ['name' => 'Next.js', 'icon' => 'fab fa-react', 'color' => 'text-white'],
                ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => 'text-green-400'],
                ['name' => 'TailwindCSS', 'icon' => 'fas fa-paint-brush', 'color' => 'text-cyan-400'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => 'text-orange-500']
            ]
        ];

        $projects = [
            [
                'title' => 'MovieMate',
                'description' => 'A web application for tracking and logging movies you\'ve watched or plan to watch. Built with NextJS, TMDB API, and MongoDB for user-based movie management.',
                'image' => 'projects/project3.png',
                'gradient' => 'from-indigo-400 to-cyan-400',
                'github' => 'https://github.com/midas79/movie-mate',
                'demo' => '#',
                'tags' => ['NextJS', 'TypeScript', 'ExpressJS', 'MongoDB', 'TailwindCSS']
            ],
            [
                'title' => 'EdenErde',
                'description' => 'An e-commerce platform for home furniture. Includes user authentication, product management, shopping cart, and Stripe payment integration.',
                'image' => 'projects/project1.png',
                'gradient' => 'from-purple-400 to-pink-400',
                'github' => 'https://github.com/midas79/eden-erde',
                'demo' => 'https://eden-erde.vercel.app/',
                'tags' => ['NextJS', 'TypeScript', 'SanityCMS', 'TailwindCSS', 'Stripe']
            ],
            [
                'title' => 'GeoTale',
                'description' => 'A web app for sharing stories and photos based on location. Features OpenLayers-based maps, drag-and-drop story upload, real-time updates, and user collaboration.',
                'image' => 'projects/project2.png',
                'gradient' => 'from-blue-400 to-purple-500',
                'github' => 'https://github.com/midas79/GeoTale',
                'demo' => 'https://midas79.github.io/GeoTale/',
                'tags' => ['JavaScript', 'Node.js', 'Webpack']
            ],
        ];


        return view('portfolio', compact('profile', 'skills', 'projects'));
    }
}