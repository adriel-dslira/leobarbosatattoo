<?php
    namespace App\controllers;

    class HomeController {
        public function openHome() {
            $viewsPath = __DIR__ . '/../views/home.php';
            include_once $viewsPath;
        }

    }

?>