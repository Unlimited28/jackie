<?php
$this->layout('dashboard', [
    'title' => 'My Results',
    'role' => 'ambassador',
    'active' => 'results',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">My Exam Results</h1>
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
                <h3>Your Performance History</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Exam Title</th>
                            <th>Date Taken</th>
                            <th>Score</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Old Testament Survey</td>
                            <td>2025-07-20</td>
                            <td>88%</td>
                            <td><span class="status status-approved">Passed</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View Details</a></td>
                        </tr>
                        <tr>
                            <td>The Gospels</td>
                            <td>2025-06-15</td>
                            <td>92%</td>
                            <td><span class="status status-approved">Passed</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View Details</a></td>
                        </tr>
                        <tr>
                            <td>Early Church History</td>
                            <td>2025-05-10</td>
                            <td>65%</td>
                            <td><span class="status status-rejected">Failed</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm">View Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
