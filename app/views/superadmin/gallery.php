<?php
$this->layout('dashboard', [
    'title' => 'Gallery Management',
    'role' => 'super_admin',
    'active' => 'gallery',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Gallery Management</h1>
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
        <!-- Upload Card -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <div class="dash-card-header">
                <h3>Upload New Photos</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="images">Select Images (Multiple Allowed)</label>
                        <input type="file" id="images" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption (Optional)</label>
                        <input type="text" id="caption" class="form-control" placeholder="A short description for the photos...">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload to Gallery</button>
                </form>
            </div>
        </div>

        <!-- Existing Photos -->
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Existing Photos</h3>
            </div>
            <div class="dash-card-content">
                <div class="gallery-grid" style="grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));">
                    <div class="gallery-item" style="position: relative;">
                        <img src="<?= asset('assets/images/new_1.jpg') ?>" alt="Gallery Image" style="height: 150px;">
                        <button class="btn btn-secondary" style="position: absolute; top: 10px; right: 10px; background: var(--danger); color: white;">Delete</button>
                    </div>
                    <div class="gallery-item" style="position: relative;">
                        <img src="<?= asset('assets/images/new_2.jpg') ?>" alt="Gallery Image" style="height: 150px;">
                        <button class="btn btn-secondary" style="position: absolute; top: 10px; right: 10px; background: var(--danger); color: white;">Delete</button>
                    </div>
                    <div class="gallery-item" style="position: relative;">
                        <img src="<?= asset('assets/images/new_3.jpg') ?>" alt="Gallery Image" style="height: 150px;">
                        <button class="btn btn-secondary" style="position: absolute; top: 10px; right: 10px; background: var(--danger); color: white;">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.gallery-grid {
    display: grid;
    gap: 16px;
}
.gallery-item img {
    width: 100%;
    object-fit: cover;
    border-radius: var(--radius);
}
</style>
