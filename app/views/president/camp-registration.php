<?php
$this->layout('dashboard', [
    'title' => 'Camp Registrations',
    'role' => 'president',
    'active' => 'camp_registration',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Camp Registrations</h1>
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
        <!-- Upload Card -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <div class="dash-card-header">
                <h3>Upload Camp Registration File</h3>
            </div>
            <div class="dash-card-content">
                <p style="color: var(--muted); margin-bottom: 16px;">Please upload an Excel file (.xlsx) with the list of registered ambassadors. Ensure the file follows the specified template.</p>
                <form class="dash-form">
                    <div class="form-group">
                        <label for="camp_year">Select Camp Year</label>
                        <select id="camp_year" class="form-control">
                            <option>2025</option>
                            <option>2026</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="registration_file">Registration File</label>
                        <input type="file" id="registration_file" class="form-control" accept=".xlsx, .xls">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="ri-upload-cloud-2-line"></i> Upload Sheet</button>
                </form>
            </div>
        </div>

        <!-- History Card -->
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Upload History</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Camp Year</th>
                            <th>Upload Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>agape_camp_2024.xlsx</td>
                            <td>2024</td>
                            <td>2024-07-15</td>
                            <td><span class="status status-approved">Approved</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
