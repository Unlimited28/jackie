<?php
// Load the role-based menu configuration
$menuConfig = require __DIR__ . '/../../config/roles.php';

// Determine the current role and active menu item, with defaults
$currentRole = $role ?? 'ambassador'; // Default to ambassador for preview
$activeItem = $active ?? 'dashboard';   // Default to dashboard

// Get the menu for the current role
$menu = $menuConfig[$currentRole] ?? [];
?>
<aside class="sidebar">
    <div class="sidebar-header">
        <div class="logo-container">
            <img src="<?= asset('assets/images/logo.png') ?>" alt="Logo" class="logo-img">
        </div>
        <div class="title">
            <span><?= htmlspecialchars(ucfirst(str_replace('_', ' ', $currentRole))) ?></span>
        </div>
    </div>
    <nav class="sidebar-nav">
        <?php foreach ($menu as $sectionTitle => $sectionItems): ?>
            <div class="nav-title"><?= htmlspecialchars($sectionTitle) ?></div>
            <?php foreach ($sectionItems as $key => $item): ?>
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= ($key === $activeItem) ? 'active' : '' ?>">
                    <i class="<?= htmlspecialchars($item['icon']) ?>"></i>
                    <span><?= htmlspecialchars($item['label']) ?></span>
                </a>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </nav>
    <div class="sidebar-footer">
        <a href="/logout"><i class="ri-logout-box-r-line"></i> Logout</a>
    </div>
</aside>
