<?php
$this->layout('dashboard', [
    'title' => 'User Management',
    'role' => 'super_admin',
    'active' => 'users',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">User Management</h1>
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
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>All System Users</h3>
                <div style="display: flex; gap: 16px;">
                    <input type="search" class="form-control" placeholder="Search by name or ID...">
                    <select class="form-control" style="width: 200px;">
                        <option>Filter by Role</option>
                        <option>Ambassador</option>
                        <option>President</option>
                    </select>
                </div>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Association</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ogbc//ra//6254</td>
                            <td>John Doe</td>
                            <td>Ambassador</td>
                            <td>Agape Association</td>
                            <td><span class="status status-approved">Active</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View/Edit</a></td>
                        </tr>
                        <tr>
                            <td>ogbc//ra//pres/01</td>
                            <td>Ajibola Balogun</td>
                            <td>President</td>
                            <td>Agape Association</td>
                            <td><span class="status status-approved">Active</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View/Edit</a></td>
                        </tr>
                        <tr>
                            <td>ogbc//ra//8345</td>
                            <td>David Ojo</td>
                            <td>Ambassador</td>
                            <td>Bethel Association</td>
                            <td><span class="status status-rejected">Suspended</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View/Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
