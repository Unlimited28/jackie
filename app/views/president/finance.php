<?php
$this->layout('dashboard', [
    'title' => 'Upload Payments',
    'role' => 'president',
    'active' => 'finance',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Upload Payments</h1>
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
                <h3>Submit a New Payment</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="purpose">Payment Purpose</label>
                        <select id="purpose" class="form-control">
                            <option value="dues">Annual Dues</option>
                            <option value="camp">Camp Fees</option>
                            <option value="exam">Exam Fees</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount (NGN)</label>
                        <input type="number" id="amount" class="form-control" placeholder="e.g., 50000">
                    </div>
                    <div class="form-group">
                        <label for="receipt">Upload Receipt (Image)</label>
                        <input type="file" id="receipt" class="form-control" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="ri-upload-cloud-line"></i> Upload Receipt</button>
                </form>
            </div>
        </div>

        <!-- History Card -->
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Payment History</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Purpose</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Annual Dues</td>
                            <td>₦25,000</td>
                            <td>2025-08-10</td>
                            <td><span class="status status-approved">Approved</span></td>
                        </tr>
                        <tr>
                            <td>Camp Fees</td>
                            <td>₦150,000</td>
                            <td>2025-08-15</td>
                            <td><span class="status status-pending">Pending</span></td>
                        </tr>
                         <tr>
                            <td>Exam Fees</td>
                            <td>₦10,000</td>
                            <td>2025-07-20</td>
                            <td><span class="status status-rejected">Rejected</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
