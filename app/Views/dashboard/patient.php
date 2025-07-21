<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<div class="flex">
    <?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
    <main class="flex-1 p-6 ml-64">
        <?php require_once __DIR__ . '/../components/alert.php'; ?>
        <h2 class="section-title">Patient Dashboard</h2>
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h3 class="text-xl font-bold text-blue-900 mb-4">Book an Appointment</h3>
            <form class="grid grid-cols-1 sm:grid-cols-2 gap-4" method="POST" action="/dashboard/book">
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <input type="text" placeholder="Name" class="p-2 border rounded custom-input" name="name" required>
                <select class="p-2 border rounded custom-select" name="gender" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input type="email" placeholder="Email" class="p-2 border rounded custom-input" name="email" required>
                <input type="tel" placeholder="Phone" class="p-2 border rounded custom-input" name="phone" required>
                <input type="date" class="p-2 border rounded custom-input" name="date" required>
                <input type="time" class="p-2 border rounded custom-input" name="time" required>
                <select class="p-2 border rounded custom-select" name="doctor" required>
                    <option value="">Select Doctor</option>
                </select>
                <select class="p-2 border rounded custom-select" name="department" required>
                    <option value="">Select Department</option>
                </select>
                <textarea placeholder="Reason for Appointment" class="p-2 border rounded custom-input col-span-2" name="reason"></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold mt-4 custom-button">Submit</button>
            </form>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-blue-900 mb-4">My Appointments</h3>
            <?php if (empty($data['appointments'])): ?>
                <p class="text-gray-600">No appointments booked.</p>
            <?php else: ?>
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-blue-100">
                            <th class="p-2">Doctor</th>
                            <th class="p-2">Date</th>
                            <th class="p-2">Time</th>
                            <th class="p-2">Reason</th>
                            <th class="p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['appointments'] as $appointment): ?>
                            <tr>
                                <td class="p-2"><?php echo htmlspecialchars($appointment['doctor_id']); ?></td>
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