<aside class="sidebar">
    <div class="sidebar-header">
        <div class="logo-container">
            <img src="<?= asset('assets/images/logo.png') ?>" alt="Logo" class="logo-img">
        </div>
        <div class="title">
            <span><?= $role_name ?? 'Dashboard' ?></span>
        </div>
    </div>
    <nav class="sidebar-nav">
        <!-- This will be made dynamic later based on role -->
        <a href="/super/dashboard" class="active"><i class="ri-dashboard-line"></i> Dashboard</a>

        <div class="nav-title">Exam Management</div>
        <a href="/super/exams"><i class="ri-file-list-3-line"></i> All Exams</a>
        <a href="/super/exams/create"><i class="ri-add-box-line"></i> Exam Creation</a>
        <a href="/super/exams/questions"><i class="ri-question-answer-line"></i> Question Bank</a>

        <div class="nav-title">Finance & Ledger</div>
        <a href="/super/finance"><i class="ri-bank-card-line"></i> Finance Dashboard</a>
        <a href="/super/finance/oversight"><i class="ri-pie-chart-2-line"></i> Finance Oversight</a>
        <a href="/super/finance/vouchers"><i class="ri-coupon-3-line"></i> Voucher Management</a>

        <div class="nav-title">User Management</div>
        <a href="/super/users"><i class="ri-team-line"></i> All Users</a>
        <a href="/super/camp-registrations"><i class="ri-file-excel-2-line"></i> Camp Registrations</a>

        <div class="nav-title">Content Management</div>
        <a href="/super/content/blog"><i class="ri-article-line"></i> Blog</a>
        <a href="/super/content/gallery"><i class="ri-gallery-line"></i> Gallery</a>

        <div class="nav-title">System</div>
        <a href="/super/notifications"><i class="ri-notification-3-line"></i> Notifications</a>
        <a href="/super/ads"><i class="ri-advertisement-line"></i> Ads Management</a>
        <a href="/super/settings/system"><i class="ri-settings-3-line"></i> System Settings</a>
        <a href="/profile/settings"><i class="ri-user-settings-line"></i> Profile Settings</a>
    </nav>
    <div class="sidebar-footer">
        <a href="/logout"><i class="ri-logout-box-r-line"></i> Logout</a>
    </div>
</aside>
