<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<div class="flex">
    <?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>
    <main class="flex-1 p-6 ml-64">
        <?php require_once __DIR__ . '/../components/alert.php'; ?>
        <h2 class="section-title">Admin Dashboard</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-blue-900 mb-4">Manage Users</h3>
                <p class="text-gray-600">View and manage all registered users.</p>
                <a href="/dashboard/users" class="bg-blue-600 text-white px-4 py-2 rounded-full mt-4 inline-block">Go to Users</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-blue-900 mb-4">Manage Doctors</h3>
                <p class="text-gray-600">Add or update doctor profiles.</p>
                <a href="/dashboard/doctors" class="bg-blue-600 text-white px-4 py-2 rounded-full mt-4 inline-block">Go to Doctors</a>
            </div>
        </div>
    </main>
</div>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>