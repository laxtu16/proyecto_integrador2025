<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = "Inicio";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("plantillas/footer_view.php");
    }

    public function quienesSomos(): string {
        $data['titulo'] = "Quienes Somos";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view('plantillas/QuienesSomos.php').view("plantillas/footer_view.php");
    }

    public function comercializacion(): string {
        $data['titulo'] = "Comercializacion";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("plantillas/footer_view.php");
    }
}