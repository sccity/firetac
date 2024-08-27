<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>FireTAC</title>
</head>
<body class="bg-background text-white">
    <header class="bg-gray-900 p-4 shadow-md">
        <h1 class="text-xl font-bold text-primary">FireTAC</h1>
        <nav class="mt-2">
            <a href="/" class="text-secondary hover:text-primary">Home</a>
            <a href="/about" class="ml-4 text-secondary hover:text-primary">About</a>
            <a href="/contact" class="ml-4 text-secondary hover:text-primary">Contact</a>
        </nav>
    </header>

    <main class="p-6">
        <!-- Display the content from the view -->
        <?= $content; ?>
    </main>

    <footer class="bg-gray-900 p-4 mt-6 text-center text-secondary">
        &copy; <?= date('Y'); ?> FireTAC. All rights reserved.
    </footer>
</body>
</html>