<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Error</title>
</head>
<body class="bg-background text-white">
    <header class="bg-gray-900 p-4 shadow-md">
        <h1 class="text-xl font-bold text-primary">FireTAC</h1>
    </header>

    <main class="p-6 text-center">
        <h2 class="text-2xl font-semibold text-red-500">404 Not Found</h2>
        <p class="mt-4 text-secondary">The page you are looking for does not exist.</p>
        <a href="/" class="mt-6 bg-primary text-black font-bold py-2 px-4 rounded hover:bg-orange-700">Go to Home</a>
    </main>

    <footer class="bg-gray-900 p-4 mt-6 text-center text-secondary">
        &copy; <?= date('Y'); ?> FireTAC. All rights reserved.
    </footer>
</body>
</html>