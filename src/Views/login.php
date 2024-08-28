<?php $title = 'Login'; ?>

<form action="/login" method="post" class="max-w-md mx-auto p-8 bg-gray-800 rounded-lg shadow-md">
    <?php if (!empty($error)): ?>
        <div class="text-red-500 mb-4"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="mb-6">
        <label for="username" class="block text-xl font-bold mb-2">Username</label>
        <input type="text" id="username" name="username" class="w-full p-3 rounded-lg bg-gray-700 text-accent" required>
    </div>

    <div class="mb-6">
        <label for="password" class="block text-xl font-bold mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full p-3 rounded-lg bg-gray-700 text-accent" required>
    </div>

    <button type="submit" class="w-full py-3 bg-secondary hover:bg-primary text-accent text-2xl rounded-lg">Login</button>
</form>