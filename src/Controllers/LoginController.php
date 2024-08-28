<?php

namespace App\Controllers;

use App\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($username === 'admin' && $password === '1234') {
                // Set the session authenticated flag
                $_SESSION['authenticated'] = true;

                // Redirect to the dashboard
                header('Location: /dashboard');
                exit;
            } else {
                $error = 'Invalid username or password.';
            }
        }

        // Render the login view
        ob_start();
        $this->render('login', ['error' => $error]);
        $content = ob_get_clean();
        include __DIR__ . '/../Views/layout.php';
    }
}