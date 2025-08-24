<?php
$this->layout('dashboard', [
    'title' => 'Notification Management',
    'role' => 'super_admin',
    'active' => 'notifications',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Notification Management</h1>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <div class="user-info">
                    <span class="user-name">Super Admin</span>
                    <span class="user-role">System Control</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Compose Card -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <div class="dash-card-header">
                <h3>Send a System-Wide Notification</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="target_role">Target Audience</label>
                        <select id="target_role" class="form-control">
                            <option value="all">All Users</option>
                            <option value="ambassador">Ambassadors Only</option>
                            <option value="president">Association Presidents Only</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Notification Title</label>
                        <input type="text" id="title" class="form-control" placeholder="e.g., System Maintenance">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="ri-send-plane-2-line"></i> Send Notification</button>
                </form>
            </div>
        </div>

        <!-- History Card -->
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Sent Notifications History</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Audience</th>
                            <th>Date Sent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>New Exam Schedule Published</td>
                            <td>All Users</td>
                            <td>2025-08-12</td>
                        </tr>
                        <tr>
                            <td>Reminder: Submit Camp Registrations</td>
                            <td>Association Presidents Only</td>
                            <td>2025-08-10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
