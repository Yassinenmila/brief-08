<?php 

class router {

    public function run (){

        $uri=$_SERVER['REQUEST_URI'];
        $uri = parse_url($uri, PHP_URL_PATH);

        switch($uri){

            case '/':
            case '/home':
                $page="home";
                break;
            case '/about':
                $page="about";
                break;
            case '/contact':
                $page="contact";
                break;
            case '/login':
                $page="login";
                break;
            case '/signup':
                $page="signup";
                break;
            case '/logout':
                $page="logout";
                break;
            case '/profil':
                $page="profil";
                break;
            case '/admin':
                $page="admin";
                break;
            default:
            $page="404";
        }
        return $page;
    }

}
$router= new router();
$page=$router->run();
?>