<?php
$this->layout('dashboard', [
    'title' => 'Super Admin Dashboard',
    'role' => 'super_admin',
    'active' => 'dashboard',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">System Overview</h1>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <img src="<?= asset('assets/images/pro.jpg') ?>" alt="User Avatar">
                <div class="user-info">
                    <span class="user-name">Super Admin</span>
                    <span class="user-role">System Control</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Stats Grid -->
        <div class="stats-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
            <div class="stat-card">
                <div class="value" style="color: var(--accent-2);">512</div>
                <div class="label">Total Users</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--success);">₦1,250,000</div>
                <div class="label">Total Approved Payments</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--danger);">12</div>
                <div class="label">Pending Approvals</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--gold);">25</div>
                <div class="label">Total Associations</div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="dash-card" style="margin-top: 24px;">
            <div class="dash-card-header">
                <h3>Recent System Activity</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Action</th>
                            <th>Details</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pres. Ajibola</td>
                            <td>Payment Upload</td>
                            <td>Uploaded receipt for Camp Fees</td>
                            <td>2025-08-20 10:30 AM</td>
                        </tr>
                        <tr>
                            <td>Amb. John Doe</td>
                            <td>Exam Taken</td>
                            <td>Completed "Old Testament Survey"</td>
                            <td>2025-08-20 09:15 AM</td>
                        </tr>
                        <tr>
                            <td>Pres. Adeoye</td>
                            <td>Exam Approval</td>
                            <td>Approved 3 ambassadors for exams</td>
                            <td>2025-08-19 04:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
