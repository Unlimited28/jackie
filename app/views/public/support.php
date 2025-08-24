<?php
$this->layout('main', ['title' => 'Support - Royal Ambassadors']);
?>

<style>
    /* This style block should be moved to a dedicated CSS file in a later refactor. */
    .page-header {
        padding-top: 120px;
        padding-bottom: 60px;
        text-align: center;
        background: linear-gradient(180deg, rgba(15, 27, 55, 0.5), transparent);
    }
    .page-header h1 {
        font-size: 2.8rem;
        font-weight: 800;
    }
    .page-header p {
        font-size: 1.1rem;
        color: var(--muted);
        max-width: 600px;
        margin: 16px auto 0;
    }
    .contact-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 48px;
        padding: 80px 24px;
        max-width: 1200px;
        margin: 0 auto;
        align-items: flex-start;
    }
    @media (min-width: 992px) {
        .contact-layout {
            grid-template-columns: 1.5fr 1fr;
        }
    }
    .contact-form-card {
        background: var(--panel);
        border: 1px solid rgba(255,255,255,.07);
        border-radius: var(--radius);
        padding: 40px;
    }
    .contact-form-card h3 {
        font-size: 1.8rem;
        margin-bottom: 24px;
    }
</style>

<!-- Page Header -->
<header class="page-header">
    <h1>Support Center</h1>
    <p>Need help? Fill out the form below to open a support ticket.</p>
</header>

<!-- Contact Layout -->
<div class="contact-layout">
    <div class="contact-form-card">
        <h3>Create a Support Ticket</h3>
        <form action="/support" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Describe your issue</label>
                <textarea id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Ticket</button>
        </form>
    </div>

    <div class="contact-info-card">
        <div class="info-item">
            <i class="ri-question-answer-line icon"></i>
            <div>
                <h4>Frequently Asked Questions</h4>
                <p>Check our FAQ section for answers to common questions.</p>
            </div>
        </div>
        <div class="info-item">
            <i class="ri-mail-line icon"></i>
            <div>
                <h4>Email Support</h4>
                <p>support@ra-ogun.org</p>
            </div>
        </div>
    </div>
</div>
