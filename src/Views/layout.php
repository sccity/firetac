<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FireTAC - <?= $title ?? 'Untitled' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-background text-accent">

    <header class="bg-primary text-white py-6 text-center">
        <h1 class="text-4xl font-bold">FireTAC</h1>
        <h2 class="text-xl mt-2"><?= $title ?? '' ?></h2>
    </header>

    <main class="container mx-auto mt-10">
        <?= $content ?>
    </main>

    <footer class="bg-primary text-white py-4 text-center mt-10">
        <p>&copy; <?= date('Y') ?> FireTAC</p>
    </footer>

</body>
</html>