<?php
use App\controllers\HomeController;
use App\controllers\NotFoundController;
use App\controllers\PortfolioController;
use App\controllers\BlogController;
use App\controllers\PostController;

require_once './vendor/autoload.php';

define('URL','http://localhost/leotattoo/');


if(isset($_GET['url'])){

    $url = explode('/', $_GET['url']);

    switch($url[0]){

        case "portfolio" : 
            $portfolio = new PortfolioController;
            $portfolio->openPortfolio();
        break;
        
        case "blog":
            $blog = new BlogController;
            $blog->openBlog();
        break;

        case "register-user":
            // $register = new RegisterController;
            //  $register->registerUser();
        break;

        case "logging-user":
            // $login = new LoginController;
            // $login->loggingUser();
        break;

        case "painel-cliente":
            // $dashboard = new DashboardController;
            // $dashboard->openClientDashboard();
        break;
        
        case "novo-projeto":
            // $dashboard = new DashboardController;
            // $dashboard->openRegisterProjectView();
        break;

        case "register-project":
            // $dashboard = new DashboardController;
            // $dashboard->registerProject();
        break;

        case "visualizar-projeto":
            // $dashboard = new DashboardController;
            // $dashboard->viewProject();
        break;

        case "update-project":
            // $dashboard = new DashboardController;
            // $dashboard->updateProject();
        break;

        case "delete-project":
            // $dashboard = new DashboardController;
            // $dashboard->deleteProjectController();
        break;

        case "editar-cadastro":
            // $user = new UserController;
            // $user->viewwUpdateUser();
        break;

        case "update-user":
            // $user = new UserController;
            // $user->userUpdateController();
        break;

        case "cadastrar-freelancer":
            // $freelancer = new FreelancerController;
            // $freelancer->viewwRegisterFreelancer();
        break;

        default:
             $notFound = new NotFoundController;
             $notFound->error();
        break;
    }
}else {
    $home = new HomeController;
    $home->openHome();
}


?>