<?php

namespace App\Controllers;

use App\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Ensure the user is authenticated
        if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
            // If not authenticated, redirect to the login page
            header('Location: /');
            exit;
        }

        // Render the dashboard view
        ob_start();
        $this->render('dashboard');
        $content = ob_get_clean();
        include __DIR__ . '/../Views/layout.php';
    }
}