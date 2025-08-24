<?php
$this->layout('dashboard', [
    'title' => 'Profile Settings',
    'role' => 'president',
    'active' => 'profile',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Profile Settings</h1>
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
                <h3>Edit Your Profile Information</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 24px;">
                        <img src="<?= asset('assets/images/director.jpg') ?>" alt="User Avatar" style="width: 80px; height: 80px; border-radius: 50%;">
                        <div class="form-group">
                            <label for="profile_picture">Update Profile Picture</label>
                            <input type="file" id="profile_picture" class="form-control">
                        </div>
                    </div>
                    <hr style="border-color: rgba(255,255,255,.1); margin: 24px 0;">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" class="form-control" value="President Ajibola">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" value="president.ajibola@example.com" readonly>
                    </div>
                    <div class="form-group">
                        <label for="association">Association</label>
                        <input type="text" id="association" class="form-control" value="Agape Association" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control" value="+234 801 234 5678">
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
