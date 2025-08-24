<?php
$this->layout('dashboard', [
    'title' => 'Exam Approvals',
    'role' => 'president',
    'active' => 'exam_approvals',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Exam Approvals</h1>
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
                <h3>Pending Exam Requests</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Ambassador Name</th>
                            <th>Requested Exam</th>
                            <th>Request Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Samuel Adekunle</td>
                            <td>The Life of Paul</td>
                            <td>2025-08-19</td>
                            <td>
                                <button class="btn btn-primary btn-sm" style="background: var(--success);">Approve</button>
                                <button class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>New Testament Survey</td>
                            <td>2025-08-18</td>
                            <td>
                                <button class="btn btn-primary btn-sm" style="background: var(--success);">Approve</button>
                                <button class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
