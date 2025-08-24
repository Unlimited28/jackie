<?php
$this->layout('dashboard', [
    'title' => 'Exam Management',
    'role' => 'super_admin',
    'active' => 'exams',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Exam Management</h1>
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
                <h3>All Exams</h3>
                <a href="/super/exams/create" class="btn btn-primary"><i class="ri-add-line"></i> Create New Exam</a>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Exam Title</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Life of Paul</td>
                            <td>Envoy</td>
                            <td><span class="status status-pending">Draft</span></td>
                            <td>
                                <a href="/super/questions" class="btn btn-secondary btn-sm">Questions</a>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                <button class="btn btn-primary btn-sm" style="background: var(--success);">Publish</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Old Testament Survey</td>
                            <td>Senior Intern</td>
                            <td><span class="status status-approved">Published</span></td>
                            <td>
                                <a href="/super/questions" class="btn btn-secondary btn-sm">Questions</a>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
