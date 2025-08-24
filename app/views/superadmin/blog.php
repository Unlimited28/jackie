<?php
$this->layout('dashboard', [
    'title' => 'Blog Management',
    'role' => 'super_admin',
    'active' => 'blog',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Blog Management</h1>
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
                <h3>All Blog Posts</h3>
                <a href="/super/blog/create" class="btn btn-primary"><i class="ri-add-line"></i> Create New Post</a>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Importance of Youth Leadership in the Church</td>
                            <td>Super Admin</td>
                            <td>2025-08-15</td>
                            <td><span class="status status-approved">Published</span></td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Recap: Annual State Camp 2025</td>
                            <td>Admin</td>
                            <td>2025-08-01</td>
                            <td><span class="status status-approved">Published</span></td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Delete</a>
                            </td>
                        </tr>
                         <tr>
                            <td>Upcoming Events in Q4</td>
                            <td>Super Admin</td>
                            <td>-</td>
                            <td><span class="status status-pending">Draft</span></td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
