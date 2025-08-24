<?php
$this->layout('dashboard', [
    'title' => 'Live Exam',
    'role' => 'ambassador',
    'active' => 'my_exams', // Keep 'my_exams' active as it's part of the same flow
]);
?>

<style>
    /* This style block should be moved to a dedicated CSS file in a later refactor. */
    .exam-card {
        background-color: var(--panel);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: var(--radius);
        padding: 32px;
    }
    .exam-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }
    .exam-timer {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--danger);
    }
    .question-meta {
        font-weight: 600;
        color: var(--muted);
    }
    .question-text {
        font-size: 1.2rem;
        margin: 24px 0;
        line-height: 1.6;
    }
    .options-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }
    .options-list li label {
        display: block;
        padding: 16px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        cursor: pointer;
        transition: var(--transition);
    }
    .options-list li label:hover {
        background-color: rgba(255, 255, 255, 0.05);
        border-color: var(--accent-2);
    }
    .options-list li input[type="radio"] {
        display: none;
    }
    .options-list li input[type="radio"]:checked + label {
        background-color: var(--accent-1);
        border-color: var(--accent-2);
        color: white;
        box-shadow: var(--glow);
    }
    .exam-navigation {
        margin-top: 32px;
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="main-content">
    <!-- Header -->
    <header class="main-header">
        <div class="header-left">
            <button class="menu-toggle"><i class="ri-menu-2-line"></i></button>
            <h1 class="page-title">Exam: The Life of Paul</h1>
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
        <div class="exam-card">
            <div class="exam-header">
                <div class="question-meta">Question 1 of 30</div>
                <div class="exam-timer"><i class="ri-time-line"></i> 29:45</div>
            </div>

            <div class="question-body">
                <p class="question-text">
                    Before his conversion, the Apostle Paul was known by what name?
                </p>
                <ul class="options-list">
                    <li>
                        <input type="radio" id="optionA" name="question1" value="A">
                        <label for="optionA">A) Peter</label>
                    </li>
                    <li>
                        <input type="radio" id="optionB" name="question1" value="B">
                        <label for="optionB">B) Saul of Tarsus</label>
                    </li>
                    <li>
                        <input type="radio" id="optionC" name="question1" value="C">
                        <label for="optionC">C) John the Baptist</label>
                    </li>
                    <li>
                        <input type="radio" id="optionD" name="question1" value="D">
                        <label for="optionD">D) Barnabas</label>
                    </li>
                </ul>
            </div>

            <div class="exam-navigation">
                <button class="btn btn-secondary">Previous</button>
                <button class="btn btn-primary">Next</button>
                <button class="btn btn-gold">Submit Exam</button>
            </div>
        </div>
    </div>
</div>
