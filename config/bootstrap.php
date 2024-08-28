<?php
// config/bootstrap.php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load the .env file from the config directory
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();