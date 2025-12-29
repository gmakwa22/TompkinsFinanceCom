<?php
// Simple image checker script
header('Content-Type: application/json');

$images_to_check = [
    '/houston.jpg',
    '/video1.mp4',
    '/images/logo.png',
    '/images/header-bg.jpg',
    '/images/states/texas.jpg',
    '/images/states/california.jpg',
    '/images/states/nevada.jpg',
    '/images/states/missouri.jpg',
    '/images/states/florida.jpg',
    '/images/states/new-york.jpg'
];

$results = [];

foreach ($images_to_check as $image_path) {
    $full_path = $_SERVER['DOCUMENT_ROOT'] . $image_path;
    $exists = file_exists($full_path);
    $readable = $exists ? is_readable($full_path) : false;
    $size = $exists ? filesize($full_path) : 0;

    $results[] = [
        'path' => $image_path,
        'exists' => $exists,
        'readable' => $readable,
        'size' => $size,
        'status' => $exists && $readable ? 'OK' : ($exists ? 'NOT_READABLE' : 'NOT_FOUND')
    ];
}

echo json_encode($results, JSON_PRETTY_PRINT);
?>
