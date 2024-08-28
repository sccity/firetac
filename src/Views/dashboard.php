<div class="flex space-x-4">
    <!-- Left Section: Table -->
    <div class="w-2/5 p-4 bg-dark-bg shadow-md rounded-lg overflow-x-auto">
        <table id="callsTable" class="min-w-full bg-dark-bg border border-dark-header">
            <thead class="bg-dark-header text-white">
                <tr>
                    <th class="py-2 px-4">Agency</th>
                    <th class="py-2 px-4">Nature</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Address</th>
                    <th class="py-2 px-4">Dispatched</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($calls) && is_array($calls) && !empty($calls)): ?>
                    <?php foreach ($calls as $call): ?>
                        <?php if (is_array($call)): ?>
                            <tr data-lat="<?= htmlspecialchars($call['latitude']) ?>" data-lng="<?= htmlspecialchars($call['longitude']) ?>">
                                <td class="py-2 px-4"><?= htmlspecialchars($call['agency']) ?></td>
                                <td class="py-2 px-4"><?= htmlspecialchars($call['nature']) ?></td>
                                <td class="py-2 px-4"><?= htmlspecialchars($call['status']) ?></td>
                                <td class="py-2 px-4"><?= htmlspecialchars($call['address']) ?></td>
                                <td class="py-2 px-4"><?= htmlspecialchars($call['date']) ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="py-2 px-4 text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Right Section: Map -->
    <div class="w-3/5 p-4">
        <div id="map" class="w-full h-96 bg-gray-200 rounded-lg"></div>
    </div>
</div>