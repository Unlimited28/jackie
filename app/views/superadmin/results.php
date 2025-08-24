<?php
$this->layout('dashboard', [
    'title' => 'Results Publishing',
    'role' => 'super_admin',
    'active' => 'results',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Results Publishing</h1>
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
                <h3>Manage Exam Result Publishing</h3>
            </div>
            <div class="dash-card-content">
                <p>This page will be used to publish, un-publish, or schedule the release of exam results to ambassadors. Feature under development.</p>
            </div>
        </div>
    </div>
</div>
