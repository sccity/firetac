<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index()
{
    ob_start();
    $this->render('index'); // Your content view
    $content = ob_get_clean();

    include __DIR__ . '/../Views/layout.php';
}
}