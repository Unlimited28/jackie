<?php
$this->layout('dashboard', [
    'title' => 'Manage Ambassadors',
    'role' => 'president',
    'active' => 'ambassadors',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Manage Ambassadors</h1>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <div class="user-info">
                    <span class="user-name">Pres. Ajibola</span>
                    <span class="user-role">Agape Association</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Ambassadors in Agape Association</h3>
                <div style="display: flex; gap: 16px;">
                    <input type="search" class="form-control" placeholder="Search Ambassadors...">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Unique ID</th>
                            <th>Full Name</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ogbc//ra//6254</td>
                            <td>John Doe</td>
                            <td>Envoy</td>
                            <td><span class="status status-approved">Active</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View</a></td>
                        </tr>
                        <tr>
                            <td>ogbc//ra//7189</td>
                            <td>Samuel Adekunle</td>
                            <td>Intern</td>
                            <td><span class="status status-approved">Active</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View</a></td>
                        </tr>
                        <tr>
                            <td>ogbc//ra//8345</td>
                            <td>David Ojo</td>
                            <td>Candidate</td>
                            <td><span class="status status-pending">Pending Approval</span></td>
                            <td><a href="#" class="btn btn-primary btn-sm">Approve</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
