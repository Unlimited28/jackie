<?php
$this->layout('dashboard', [
    'title' => 'Profile Settings',
    'role' => 'super_admin',
    'active' => 'profile',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Personal Settings</h1>
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
                <h3>Your Profile Information</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                     <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 24px;">
                        <img src="<?= asset('assets/images/pro.jpg') ?>" alt="User Avatar" style="width: 80px; height: 80px; border-radius: 50%;">
                        <div class="form-group">
                            <label for="profile_picture">Update Profile Picture</label>
                            <input type="file" id="profile_picture" class="form-control">
                        </div>
                    </div>
                    <hr style="border-color: rgba(255,255,255,.1); margin: 24px 0;">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" class="form-control" value="Super Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" value="super.admin@ra-ogun.org" readonly>
                    </div>
                    <hr style="border-color: rgba(255,255,255,.1); margin: 24px 0;">
                    <h4>Change Password</h4>
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" id="current_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" id="new_password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
