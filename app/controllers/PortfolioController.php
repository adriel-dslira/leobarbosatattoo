<?php
    namespace App\controllers;

    class PortfolioController {
        public function openPortfolio() {
            $viewsPath = __DIR__ . '/../views/portfolio.php';
            include_once $viewsPath;
        }

    }

?>