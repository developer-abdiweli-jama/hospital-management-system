<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<div class="flex">
    <?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
    <main class="flex-1 p-6 ml-64">
        <?php require_once __DIR__ . '/../components/alert.php'; ?>
        <h2 class="section-title">Doctor Dashboard</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-blue-900 mb-4">Upcoming Appointments</h3>
            <?php if (empty($data['appointments'])): ?>
                <p class="text-gray-600">No upcoming appointments.</p>
            <?php else: ?>
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-blue-100">
                            <th class="p-2">Patient</th>
                            <th class="p-2">Date</th>
                            <th class="p-2">Time</th>
                            <th class="p-2">Reason</th>
                            <th class="p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['appointments'] as $appointment): ?>
                            <tr>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['patient_id']); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['appointment_date']); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['appointment_time']); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['reason']); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['status']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </main>
</div>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>