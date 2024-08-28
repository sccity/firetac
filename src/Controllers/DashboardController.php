<?php

namespace App\Controllers;

use App\Controller;

class DashboardController extends Controller
{
    private function fetchDataFromAPI()
    {
        $apiToken = $_ENV['TOKEN'];
        $url = "https://spillmanapi.santaclarautah.gov/cad/active?token={$apiToken}";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
            curl_close($ch);
            exit;
        }
    
        curl_close($ch);
    
        if ($response === false) {
            echo 'Failed to fetch data.';
            exit;
        }
    
        // Decode JSON response to an array
        $data = json_decode($response, true);
    
        // Return data if it's an array, otherwise return an empty array
        if (!is_array($data)) {
            echo 'Invalid data format.';
            return [];
        }
    
        return $data;
    }
    
    public function index()
    {
        if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
            header('Location: /');
            exit;
        }
    
        $data = $this->fetchDataFromAPI();
    
    
        ob_start();
        $this->render('dashboard', ['calls' => $data]);
        $content = ob_get_clean();
        include __DIR__ . '/../Views/layout.php';
    }
}