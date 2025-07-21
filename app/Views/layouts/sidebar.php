<aside class="bg-blue-900 text-white w-64 p-6 fixed h-full">
    <h2 class="text-xl font-bold mb-6">Dashboard</h2>
    <ul>
        <?php if (\App\Core\Auth::getUserRole() === 'Admin'): ?>
            <li><a href="/dashboard/admin" class="hover:text-blue-300">Admin Overview</a></li>
            <li><a href="/dashboard/users" class="hover:text-blue-300">Manage Users</a></li>
            <li><a href="/dashboard/doctors" class="hover:text-blue-300">Manage Doctors</a></li>
        <?php elseif (\App\Core\Auth::getUserRole() === 'Doctor'): ?>
            <li><a href="/dashboard/doctor" class="hover:text-blue-300">Appointments</a></li>
            <li><a href="/dashboard/schedule" class="hover:text-blue-300">Schedule</a></li>
        <?php elseif (\App\Core\Auth::getUserRole() === 'Patient'): ?>
            <li><a href="/dashboard/patient" class="hover:text-blue-300">My Appointments</a></li>
            <li><a href="/dashboard/book" class="hover:text-blue-300">Book Appointment</a></li>
        <?php endif; ?>
        <li><a href="/logout" class="hover:text-blue-300">Logout</a></li>
    </ul>
</aside>