<?php

class controller
{




    public $baseurl = "http://localhost/Tops_project/Assets";
    function __construct()
    {

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {

                case '/':

                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");


                    break;
                case '/index':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");


                    break;


                case '/how':
                    // include_once("Views/header.php");
                    include_once("Views/how.php");
                    include_once("Views/footer.php");


                    break;

                case '/about':
                    // include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");


                    break;



                case '/services':
                    // include_once("Views/header.php");
                    include_once("Views/services.php");
                    include_once("Views/footer.php");


                    break;

                case '/404':
                    // include_once("Views/header.php");
                    include_once("Views/404.php");
                    include_once("Views/footer.php");


                    break;


                case '/pricing':
                    // include_once("Views/header.php");
                    include_once("Views/pricing.php");
                    include_once("Views/footer.php");


                    break;

                case '/contact':
                    // include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");


                    break;

                case '/candidates_list':
                    // include_once("Views/header.php");
                    include_once("Views/candidates_list.php");
                    include_once("Views/footer.php");


                    break;

                case '/candidates_single':
                    // include_once("Views/header.php");
                    include_once("Views/candidates_single.php");
                    include_once("Views/footer.php");


                    break;















            }
        } else {
            header("location:home");
        }



    }


}
$controller = new controller;