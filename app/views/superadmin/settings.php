<?php
$this->layout('dashboard', [
    'title' => 'System Settings',
    'role' => 'super_admin',
    'active' => 'settings',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">System Settings</h1>
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
                <h3>General System Configuration</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="site_name">Site Name</label>
                        <input type="text" id="site_name" class="form-control" value="Royal Ambassadors Ogun Baptist Conference">
                    </div>
                    <div class="form-group">
                        <label for="admin_email">Admin Email</label>
                        <input type="email" id="admin_email" class="form-control" value="admin@ra-ogun.org">
                    </div>
                    <div class="form-group">
                        <label for="president_passcode">President Registration Passcode</label>
                        <input type="text" id="president_passcode" class="form-control" value="ogbc//assets//president">
                    </div>
                    <div class="form-group">
                        <label for="super_admin_passcode">Super Admin Registration Passcode</label>
                        <input type="text" id="super_admin_passcode" class="form-control" value="ogbc//assets//super">
                    </div>
                     <div class="form-group">
                        <label>
                            <input type="checkbox" checked> Enable Public Registration
                        </label>
                    </div>
                    <hr style="border-color: rgba(255,255,255,.1); margin: 24px 0;">
                    <h4>Public Content Management</h4>
                    <div class="form-group">
                        <label for="about_content">About Section Content</label>
                        <textarea id="about_content" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mission_content">Mission Statement</label>
                        <textarea id="mission_content" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="vision_content">Vision Statement</label>
                        <textarea id="vision_content" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</div>
