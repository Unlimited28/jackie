<?php
$this->layout('dashboard', [
    'title' => 'Exam Questions',
    'role' => 'super_admin',
    'active' => 'questions',
]);
?>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Exam Questions: The Life of Paul</h1>
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
        <!-- Add Question Card -->
        <div class="dash-card" style="margin-bottom: 24px;">
            <div class="dash-card-header">
                <h3>Add New Question</h3>
            </div>
            <div class="dash-card-content">
                <form class="dash-form">
                    <div class="form-group">
                        <label for="question_text">Question Text</label>
                        <textarea id="question_text" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="option_a">Option A</label>
                        <input type="text" id="option_a" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="option_b">Option B</label>
                        <input type="text" id="option_b" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="option_c">Option C</label>
                        <input type="text" id="option_c" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="option_d">Option D</label>
                        <input type="text" id="option_d" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correct_option">Correct Option</label>
                        <select id="correct_option" class="form-control">
                            <option value="A">Option A</option>
                            <option value="B">Option B</option>
                            <option value="C">Option C</option>
                            <option value="D">Option D</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="annotation">Annotation/Explanation (Optional)</label>
                        <textarea id="annotation" class="form-control" rows="3" placeholder="Explain why this is the correct answer..."></textarea>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <button type="submit" class="btn btn-primary">Save & Next</button>
                        <button type="button" class="btn btn-gold">Finish & Publish</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Existing Questions -->
        <div class="dash-card">
            <div class="dash-card-header">
                <h3>Existing Questions (1 of 30)</h3>
            </div>
            <div class="dash-card-content">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Correct Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Before his conversion, the Apostle Paul was known by what name?</td>
                            <td>B</td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="background: var(--danger); color: white;">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
