<?php

namespace YanuarEkaPutera\Belajar\PHP\MVC\Controller;

use YanuarEkaPutera\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index():void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Yanuar Eka Putera"
        ];

        View::render('Home/index', $model);
    }

    function hello():void
    {
        echo "HomeController.hello()";
    }

    function world():void
    {
        echo "HomeController.world()";
    }

    function about():void
    {
        echo "Author : Yanuar Eka Putera";
    }

    function login(): void{
        $request = [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
        //Kirimkan response ke view
    }
}