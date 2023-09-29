<?php
    namespace App\controllers;

    class BlogController {
        public function openBlog() {
            $viewsPath = __DIR__ . '/../views/blog.php';
            include_once $viewsPath;
        }

    }

?>