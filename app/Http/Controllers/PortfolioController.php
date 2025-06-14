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
                'title' => 'Eden Erde',
                'description' => 'Full-stack e-commerce platform built with Laravel and MySQL. Features include user authentication, product management, shopping cart, and payment integration.',
                'image' => 'projects/project1.png',
                'gradient' => 'from-purple-400 to-pink-400',
                'github' => 'https://github.com/midas79/eden-erde',
                'demo' => 'https://eden-erde.vercel.app/',
                'tags' => ['NextJS', 'TypeScript', 'SanityCMS', 'TailwindCSS', 'Stripe']
            ],
            [
                'title' => 'GeoTale',
                'description' => 'React-based task management application with drag-and-drop functionality, real-time updates, and user collaboration features.',
                'image' => 'projects/project2.png',
                'gradient' => 'from-blue-400 to-purple-500',
                'github' => 'https://github.com/midas79/GeoTale',
                'demo' => 'https://midas79.github.io/GeoTale/#/',
                'tags' => ['JavaScript', 'Node.js', 'Webpack']
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Interactive weather dashboard using OpenWeather API. Features location-based weather, forecasts, and beautiful data visualizations.',
                'image' => 'project3.jpg',
                'gradient' => 'from-indigo-400 to-cyan-400',
                'github' => '#',
                'demo' => '#',
                'tags' => ['JavaScript', 'API', 'Chart.js']
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'Responsive portfolio website built with modern web technologies. Features smooth animations and optimized performance.',
                'image' => 'project4.jpg',
                'gradient' => 'from-orange-400 to-red-400',
                'github' => '#',
                'demo' => '#',
                'tags' => ['HTML', 'CSS', 'JavaScript']
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'Content management system for blogging with rich text editor, categories, tags, and comment system built with Laravel.',
                'image' => 'project5.jpg',
                'gradient' => 'from-green-400 to-blue-500',
                'github' => '#',
                'demo' => '#',
                'tags' => ['Laravel', 'TailwindCSS', 'MySQL']
            ],
            [
                'title' => 'Machine Learning Model',
                'description' => 'Predictive analytics model using Python and scikit-learn for data analysis and visualization with interactive dashboard.',
                'image' => 'project6.jpg',
                'gradient' => 'from-yellow-400 to-orange-500',
                'github' => '#',
                'demo' => '#',
                'tags' => ['Python', 'ML', 'Flask']
            ]
        ];

        return view('portfolio', compact('profile', 'skills', 'projects'));
    }
}