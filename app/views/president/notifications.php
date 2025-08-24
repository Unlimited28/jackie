<?php
$this->layout('dashboard', [
    'title' => 'Notifications',
    'role' => 'president',
    'active' => 'notifications',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Notifications</h1>
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
                <h3>Your Recent Notifications</h3>
            </div>
            <div class="dash-card-content">
                <ul class="notification-list">
                    <li class="notification-item">
                        <div class="icon-wrapper" style="background-color: var(--danger-alpha-10);"><i class="ri-file-excel-2-line"></i></div>
                        <div class="message">
                            <strong>Camp Registration Uploaded:</strong> Your camp registration sheet for 2025 has been submitted for approval.
                            <span class="timestamp">1 day ago</span>
                        </div>
                    </li>
                    <li class="notification-item">
                        <div class="icon-wrapper" style="background-color: var(--success-alpha-10);"><i class="ri-checkbox-multiple-line"></i></div>
                        <div class="message">
                            <strong>Ambassador Approved:</strong> You have approved the registration for David Ojo.
                             <span class="timestamp">3 days ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.notification-list {
    list-style: none;
    padding: 0;
}
.notification-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px;
    border-bottom: 1px solid rgba(255,255,255,.07);
}
.notification-item:last-child {
    border-bottom: none;
}
.notification-item .icon-wrapper {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}
.notification-item .message {
    flex: 1;
}
.notification-item .message .timestamp {
    display: block;
    font-size: 0.85rem;
    color: var(--muted);
    margin-top: 4px;
}
</style>
