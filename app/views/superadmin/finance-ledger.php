<?php
$this->layout('dashboard', [
    'title' => 'Finance Ledger',
    'role' => 'super_admin',
    'active' => 'finance', // Maps to the 'Approvals' link
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Finance Ledger</h1>
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
                <h3>All Financial Records</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Association</th>
                            <th>Purpose</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Approved By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Agape Association</td>
                            <td>Annual Dues</td>
                            <td>₦25,000</td>
                            <td>2025-08-10</td>
                            <td><span class="status status-approved">Approved</span></td>
                            <td>Super Admin</td>
                        </tr>
                         <tr>
                            <td>Bethel Association</td>
                            <td>Exam Fees</td>
                            <td>₦10,000</td>
                            <td>2025-08-14</td>
                            <td><span class="status status-pending">Pending</span></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Zion Association</td>
                            <td>Camp Fees</td>
                            <td>₦120,000</td>
                            <td>2025-07-20</td>
                            <td><span class="status status-rejected">Rejected</span></td>
                            <td>Super Admin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
