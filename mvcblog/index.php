<?php
$request = $_SERVER['REQUEST_URI'];
$basePath = '/mvcblog'; // Adjust this if your base path is different

switch ($request) {
    case $basePath . '/':
        require __DIR__ . '/controllers/IndexController.php';
        $controller = new IndexController();
        $controller->index();
        break;
    case $basePath . '/post':
        require __DIR__ . '/controllers/PostController.php';
        $controller = new PostController();
        $controller->view();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}