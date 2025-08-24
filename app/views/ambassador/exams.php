<?php
$this->layout('dashboard', [
    'title' => 'My Exams',
    'role' => 'ambassador',
    'active' => 'my_exams',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">My Exams</h1>
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
                <h3>Available & Upcoming Exams</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Exam Title</th>
                            <th>Rank Requirement</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Life of Paul</td>
                            <td>Envoy</td>
                            <td><span class="status status-approved">Approved</span></td>
                            <td><a href="/ambassador/exams/take" class="btn btn-primary">Take Exam</a></td>
                        </tr>
                        <tr>
                            <td>Old Testament Survey</td>
                            <td>Senior Intern</td>
                            <td><span class="status status-pending">Taken</span></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>The Book of Acts</td>
                            <td>Envoy</td>
                            <td><span class="status status-pending">Pending Approval</span></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>New Testament Heroes</td>
                            <td>Special Envoy</td>
                            <td><span class="status status-rejected">Not Eligible</span></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
