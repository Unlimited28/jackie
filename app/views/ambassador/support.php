<?php
$this->layout('dashboard', [
    'title' => 'Support',
    'role' => 'ambassador',
    'active' => 'support',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Support</h1>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <div class="user-info">
                    <span class="user-name">Amb. John Doe</span>
                    <span class="user-role">Envoy</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Submit a Support Ticket</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="e.g., Issue with exam result">
                    </div>
                    <div class="form-group">
                        <label for="message">Describe your issue in detail</label>
                        <textarea id="message" class="form-control" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Ticket</button>
                </form>
            </div>
        </div>
    </div>
</div>
