<?php
$this->layout('dashboard', [
    'title' => 'President Dashboard',
    'role' => 'president',
    'active' => 'dashboard',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <img src="<?= asset('assets/images/director.jpg') ?>" alt="User Avatar">
                <div class="user-info">
                    <span class="user-name">Pres. Ajibola</span>
                    <span class="user-role">Agape Association</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Welcome Message -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <h2>Welcome, President Ajibola!</h2>
            <p>Here's an overview of your association's activities.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
            <div class="stat-card">
                <div class="value" style="color: var(--accent-2);">42</div>
                <div class="label">Total Ambassadors</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--danger);">5</div>
                <div class="label">Pending Approvals</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--gold);">2</div>
                <div class="label">Pending Payments</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--success);">15</div>
                <div class="label">Camp Registered</div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="dash-card" style="margin-top: 24px;">
            <div class="dash-card-header">
                <h3>Pending Actions</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Ambassador Name</th>
                            <th>Action Required</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Samuel Adekunle</td>
                            <td>Exam Approval Request</td>
                            <td>2025-08-19</td>
                            <td><a href="/president/exam-approvals" class="btn btn-secondary btn-sm">View</a></td>
                        </tr>
                        <tr>
                            <td>David Ojo</td>
                            <td>New Registration</td>
                            <td>2025-08-18</td>
                            <td><a href="/president/ambassadors" class="btn btn-secondary btn-sm">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
