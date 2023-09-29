<?php
    namespace App\controllers;

    class PostController {
        public function openPortfolio() {
            $viewsPath = __DIR__ . '/../views/post.php';
            include_once $viewsPath;
        }

    }

?>