<?php

// Define available pages and their corresponding content
$pages = [
    'home' => [
        'title' => 'Home',
        'content' => 'Welcome to our homepage.'
    ],
    'product' => [
        'title' => 'Product',
        'content' => 'Welcome to our Product page.'
    ],
    'contact' => [
        'title' => 'Contact Us',
        'content' => 'Get in touch with us.'
    ]
];

// Get the requested page from the query parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Check if the requested page exists, otherwise default to 'home'
if (array_key_exists($page, $pages)) {
    $pageTitle = $pages[$page]['title'];
    $pageContent = $pages[$page]['content'];
} else {
    $pageTitle = 'Page Not Found';
    $pageContent = 'The requested page was not found.';
}

// Include the template file to render the page
include 'template.php';
