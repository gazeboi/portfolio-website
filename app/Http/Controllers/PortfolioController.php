<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Raikhan Geza Alburama',
            'title' => 'Blending design, code, and empathy into seamless digital journeys',
            'greeting' => 'Hey there 👋, My name is',
            'description' => 'Computer Science Student at Brawijaya University focused on UI/UX design and innovative software solutions',
            'cv_path' => 'cv/CV Raikhan Geza Alburama .pdf',
            'about' => [
                'title' => 'About',
                'subtitle' => 'Get to know me better',
                'content' => 'I am a Computer Science student at Brawijaya University who is passionate about crafting intuitive and impactful digital experiences. I specialize in UI/UX design and front-end development, with experience working on web and mobile applications. My goal is to bridge the gap between aesthetics and functionality to build meaningful technology. I’m always eager to collaborate, learn new tools, and create designs that solve real-world problems.',
                'highlights',

                'highlights' => [
                    'Computer Science Student',
                    'Brawijaya University',
                    'UI/UX Enthusiast',
                    'Creative Problem Solver'
                ],
                'interests' => [
                    'Web Development',
                    'Mobile App Development',
                    'UI/UX Design'
                    
                ]
            ],
            'github' => 'https://github.com/gazeboi',
            'facebook' => 'https://www.facebook.com/profile.php?id=100012872413096',
            'instagram' => 'https://www.instagram.com/raihangeza/',
            'email' => 'raikhangeza10gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/dionisiussj/',
        ];

        $skills = [
            'Programming Languages' => [
                ['name' => 'HTML', 'icon' => 'fab fa-html5', 'color' => 'text-orange-500'],
                ['name' => 'CSS', 'icon' => 'fab fa-css3-alt', 'color' => 'text-blue-500'],
                ['name' => 'JavaScript', 'icon' => 'fab fa-js-square', 'color' => 'text-yellow-300'],
                ['name' => 'Java', 'icon' => 'fab fa-java', 'color' => 'text-red-500'],
                ['name' => 'Kotlin', 'icon' => 'fab fa-android', 'color' => 'text-green-500'],
                ['name' => 'Figma', 'icon' => 'fab fa-figma', 'color' => 'text-pink-500']
            ],
            'Frameworks & Tools' => [
                ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => 'text-red-400'],
                ['name' => 'React', 'icon' => 'fab fa-react', 'color' => 'text-blue-400'],
                ['name' => 'TailwindCSS', 'icon' => 'fas fa-paint-brush', 'color' => 'text-cyan-400'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => 'text-orange-500'],
                ['name' => 'VS Code', 'icon' => 'fas fa-code', 'color' => 'text-indigo-400'],
                ['name' => 'Adobe XD', 'icon' => 'fas fa-pencil-ruler', 'color' => 'text-pink-400']
                    ]
        ];

        $projects = [
            [
                'title' => 'Reservin',
                'description' => 'A web and mobile platform for room and venue reservation, featuring user login, real-time booking, payment integration, and admin panel..',
                'image' => 'projects/reservin.png',
                'gradient' => 'from-indigo-400 to-cyan-400',
                'github' => 'https://github.com/gazeboi/reservin-web',
                'demo' => 'https://reservin.achmedhibatillah.com/',
                'tags' => ['Blade', 'javaScript', 'CSS', 'PHP', 'TailwindCSS','VueJS','FIGMA' ]
            ],
            [
                'title' => 'MentalCare',
                'description' => 'A mobile application to support mental health through self-assessment tools and digital counseling features.',
                'image' => 'projects/Calmius.png',
                'gradient' => 'from-green-400 to-indigo-400',
                'github' => 'https://github.com/gazeboi/project-calmius',
                'demo' => 'https://www.figma.com/proto/Z7GpL5vE5v1w1O3C58dO1O/Design?page-id=0%3A1&node-id=30-920&t=grqtVde67xUmdCrc-1',
                'tags' => ['Kotlin', 'Mobile App', 'Mental Health','FIGMA']
            ],
            [
                'title' => 'ClayConnect',
                'description' => 'A website prototype for promoting and selling traditional pottery with user-friendly catalog and checkout experience.',
                'image' => 'projects/Gerabahku.png',
                'gradient' => 'from-yellow-400 to-amber-500',
                'github' => 'https://github.com/gazeboi/ClayConnect',
                'demo' => 'https://www.figma.com/proto/olwBPL1UULJWI9QZrw8sHn/ClayConnect?page-id=0%3A1&node-id=2009-202&starting-point-node-id=2009%3A202&t=brDyoKa3MRPKFqn2-1',
                'tags' => ['FIGMA', 'tags' ,'Blade', 'javaScript', 'CSS', 'PHP', 'TailwindCSS','VueJS', ]
            ],
            [
                'title' => 'Vieneta',
                'description' => 'A high-fidelity e-commerce app prototype designed for a fashion brand, featuring user-friendly product browsing, wishlist functionality, and streamlined cart-to-checkout flow.',
                'image' => 'projects/vieenta.png',
                'gradient' => 'from-yellow-400 to-amber-500',
                'github' => '#',
                'demo' => 'https://www.figma.com/proto/olwBPL1UULJWI9QZrw8sHn/ClayConnect?page-id=0%3A1&node-id=2009-202&starting-point-node-id=2009%3A202&t=brDyoKa3MRPKFqn2-1',
                'tags' => ['FIGMA',  ]
            ],
        ];


        return view('portfolio', compact('profile', 'skills', 'projects'));
    }
}