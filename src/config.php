<?php
// PHP Configuration and Data
$developer = [
    'name' => 'Harshal Sawant',
    'title' => 'Full-Stack Software Developer',
    'email' => 'harshalsawant.dev@gmail.com',
    'phone' => '+91 8828166801',
    'location' => 'Mumbai, IN',
    'bio' => 'Passionate software developer with 1+ years of experience in creating innovative web applications and mobile solutions. I love turning complex problems into simple, beautiful, and intuitive solutions.',
    'github' => 'https://github.com/c0d3h01',
    'linkedin' => 'https://linkedin.com/in/haarshalsawant',
    'twitter' => 'https://twitter.com/haarshalsawant',
    'discord' => 'https://discordapp.com/users/904361015171481610'
];

$skills = [
    'Frontend' => ['JavaScript', 'React', 'TypeScript'],
    'Backend' => ['PHP', 'Node.js', 'Python', 'Rust'],
    'Database' => ['MySQL', 'PostgreSQL', 'MongoDB'],
    'DevOps' => ['Docker', 'Nix', 'CI/CD', 'Linux', 'Nginx'],
];

$projects = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'A full-featured e-commerce platform built with React and Node.js, featuring real-time inventory management and payment integration.',
        'technologies' => ['React', 'Node.js', 'MongoDB', 'Stripe API'],
        'github' => 'https://github.com/alexjohnson/ecommerce',
        'demo' => 'https://demo-ecommerce.com',
        'image' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIiBmaWxsPSIjNjM2NkYxIi8+Cjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCI+RS1Db21tZXJjZTwvdGV4dD4KPC9zdmc+'
    ],
    [
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates, team collaboration features, and advanced analytics.',
        'technologies' => ['Vue.js', 'PHP', 'MySQL', 'WebSocket'],
        'github' => 'https://github.com/alexjohnson/taskmanager',
        'demo' => 'https://demo-taskmanager.com',
        'image' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIiBmaWxsPSIjMTBCOTgxIi8+Cjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCI+VGFzayBNYW5hZ2VyPC90ZXh0Pgo8L3N2Zz4='
    ],
    [
        'title' => 'Weather Dashboard',
        'description' => 'A beautiful weather dashboard with location-based forecasts, interactive maps, and weather alerts using modern APIs.',
        'technologies' => ['JavaScript', 'PHP', 'OpenWeather API', 'Chart.js'],
        'github' => 'https://github.com/alexjohnson/weather',
        'demo' => 'https://demo-weather.com',
        'image' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIiBmaWxsPSIjMDU5NEVBIi8+Cjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCI+V2VhdGhlciBBcHA8L3RleHQ+Cjwvc3ZnPg=='
    ]
];

$experience = [
    [
        'position' => 'Junior Developer',
        'company' => 'X | X.com',
        'duration' => '2022 - 2023',
        'description' => 'Started career focusing on backend system development and gradually expanded to full-stack development.',
        'achievements' => [
            'Completed 20+ projects',
            'Learned 5 new technologies',
            'Received excellence award'
        ]
    ],

    [
        'position' => 'Junior Developer',
        'company' => 'X | X.com',
        'duration' => '2023 - 2024',
        'description' => 'Started career focusing on backend system development and gradually expanded to full-stack development.',
        'achievements' => [
            'Completed 20+ projects',
            'Learned 5 new technologies',
            'Received excellence award'
        ]
    ],

    [
        'position' => 'Junior Developer',
        'company' => 'X | X.com',
        'duration' => '2024 - present',
        'description' => 'Started career focusing on backend system development and gradually expanded to full-stack development.',
        'achievements' => [
            'Completed 20+ projects',
            'Learned 5 new technologies',
            'Received excellence award'
        ]
    ],
];

// Handle contact form submission
$message = '';
if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $msg = htmlspecialchars($_POST['message'] ?? '');

    if ($name && $email && $subject && $msg) {
        // In a real application, you would send email or save to database
        $message = "Thank you for your message! I'll get back to you soon.";
    } else {
        $message = "Please fill in all fields.";
    }
}

// Get current page section
$section = $_GET['section'] ?? 'home';
