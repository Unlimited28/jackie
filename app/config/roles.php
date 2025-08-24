<?php

// This file defines the navigation menu for each user role.
// The keys (e.g., 'dashboard', 'my_exams') are used to set the active state.

return [
    'ambassador' => [
        'Main' => [
            'dashboard' => ['label' => 'Overview', 'icon' => 'ri-dashboard-line', 'href' => '/ambassador'],
            'my_exams' => ['label' => 'My Exams', 'icon' => 'ri-file-list-3-line', 'href' => '/ambassador/exams'],
            'results' => ['label' => 'My Results', 'icon' => 'ri-award-line', 'href' => '/ambassador/results'],
            'notifications' => ['label' => 'Notifications', 'icon' => 'ri-notification-3-line', 'href' => '/ambassador/notifications'],
        ],
        'Content' => [
            'blog' => ['label' => 'Blog', 'icon' => 'ri-article-line', 'href' => '/blog'],
            'gallery' => ['label' => 'Gallery', 'icon' => 'ri-gallery-line', 'href' => '/gallery'],
        ],
        'Account' => [
            'profile' => ['label' => 'Profile', 'icon' => 'ri-user-settings-line', 'href' => '/ambassador/profile'],
            'support' => ['label' => 'Support', 'icon' => 'ri-customer-service-2-line', 'href' => '/ambassador/support'],
            'logout' => ['label' => 'Logout', 'icon' => 'ri-logout-box-r-line', 'href' => '/logout'],
        ],
    ],

    'president' => [
        'Main' => [
            'dashboard' => ['label' => 'Overview', 'icon' => 'ri-dashboard-line', 'href' => '/president'],
            'ambassadors' => ['label' => 'Ambassadors', 'icon' => 'ri-team-line', 'href' => '/president/ambassadors'],
        ],
        'Exams & Camp' => [
            'exam_approvals' => ['label' => 'Exam Approvals', 'icon' => 'ri-user-follow-line', 'href' => '/president/exam-approvals'],
            'camp_registration' => ['label' => 'Camp Registration', 'icon' => 'ri-file-excel-2-line', 'href' => '/president/camp-registration'],
        ],
        'Finance' => [
            'finance' => ['label' => 'Upload Receipts', 'icon' => 'ri-bank-card-line', 'href' => '/president/finance'],
            'history' => ['label' => 'Payment History', 'icon' => 'ri-history-line', 'href' => '/president/finance/history'],
        ],
        'Account' => [
            'notifications' => ['label' => 'Notifications', 'icon' => 'ri-notification-3-line', 'href' => '/president/notifications'],
            'profile' => ['label' => 'Profile', 'icon' => 'ri-user-settings-line', 'href' => '/president/profile'],
            'logout' => ['label' => 'Logout', 'icon' => 'ri-logout-box-r-line', 'href' => '/logout'],
        ],
    ],

    'super_admin' => [
        'Main' => [
            'dashboard' => ['label' => 'Overview', 'icon' => 'ri-dashboard-line', 'href' => '/super'],
            'users' => ['label' => 'Users', 'icon' => 'ri-team-line', 'href' => '/super/users'],
        ],
        'Exam Management' => [
            'exams' => ['label' => 'Exams', 'icon' => 'ri-file-list-3-line', 'href' => '/super/exams'],
            'questions' => ['label' => 'Question Bank', 'icon' => 'ri-question-answer-line', 'href' => '/super/questions'],
            'results' => ['label' => 'Results', 'icon' => 'ri-award-line', 'href' => '/super/results'],
        ],
        'Finance & Ledger' => [
            'finance' => ['label' => 'Approvals', 'icon' => 'ri-bank-card-line', 'href' => '/super/finance-ledger'],
            'receipts' => ['label' => 'All Receipts', 'icon' => 'ri-file-text-line', 'href' => '/super/finance-ledger/receipts'],
        ],
        'Content' => [
            'blog' => ['label' => 'Blog', 'icon' => 'ri-article-line', 'href' => '/super/blog'],
            'gallery' => ['label' => 'Gallery', 'icon' => 'ri-gallery-line', 'href' => '/super/gallery'],
        ],
        'System' => [
            'notifications' => ['label' => 'Notifications', 'icon' => 'ri-notification-3-line', 'href' => '/super/notifications'],
            'settings' => ['label' => 'Settings', 'icon' => 'ri-settings-3-line', 'href' => '/super/settings'],
            'profile' => ['label' => 'Profile', 'icon' => 'ri-user-settings-line', 'href' => '/super/profile'],
            'logout' => ['label' => 'Logout', 'icon' => 'ri-logout-box-r-line', 'href' => '/logout'],
        ],
    ],
];
