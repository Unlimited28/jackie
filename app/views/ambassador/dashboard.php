<?php
$this->layout('dashboard', [
    'title' => 'Ambassador Dashboard',
    'role' => 'ambassador',
    'active' => 'dashboard',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Dashboard</h1>
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
        <!-- Welcome Message -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <h2>Welcome, Ambassador John Doe!</h2>
            <p>Your unique ID is <strong style="color: var(--gold);">ogbc//ra//6254</strong>. Here is a summary of your journey.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="stat-card">
                <div class="value" style="color: var(--accent-2);">3</div>
                <div class="label">Approved Exams</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--success);">85%</div>
                <div class="label">Average Score</div>
            </div>
            <div class="stat-card">
                <div class="value" style="color: var(--gold);">Envoy</div>
                <div class="label">Current Rank</div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="dash-card" style="margin-top: 24px;">
            <div class="dash-card-header">
                <h3>Recent Notifications</h3>
            </div>
            <div class="dash-card-content">
                <ul>
                    <li>New Exam "The Life of Paul" has been scheduled.</li>
                    <li>Your payment for the annual camp has been confirmed.</li>
                    <li>New blog post: "The Importance of Youth Leadership".</li>
                </ul>
            </div>
        </div>
    </div>
</div>
