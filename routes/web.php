<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'Home';
    $subtitle = 'Where everything starts!';

    return view('home', compact('title', 'subtitle'));
});

Route::get('/about', function () {
    $title = 'About Us';

    $team_section = [
        'title' => 'Our Team',
        'paragraph' => 'Meet our team of passionate professionals, each bringing unique expertise to the table. With diverse skills we collaborate to deliver innovative solutions and exceptional results. Committed to excellence, we work together to tackle challenges and provide outstanding service to our clients.',
        'team' => [
            [
                'name' => 'John',
                'lastname' => 'Doe',
                'email' => 'john.doe@example.com'
            ],
            [
                'name' => 'Jane',
                'lastname' => 'Smith',
                'email' => 'jane.smith@example.com'
            ],
            [
                'name' => 'Michael',
                'lastname' => 'Johnson',
                'email' => 'michael.johnson@example.com'
            ],
            [
                'name' => 'Emily',
                'lastname' => 'Davis',
                'email' => 'emily.davis@example.com'
            ],
            [
                'name' => 'David',
                'lastname' => 'Miller',
                'email' => 'david.miller@example.com'
            ],
            [
                'name' => 'Sophia',
                'lastname' => 'Garcia',
                'email' => 'sophia.garcia@example.com'
            ]
        ]
    ];

    return view('about', compact('title', 'team_section'));
});
