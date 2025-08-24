<?php
$this->layout('main', ['title' => 'Contact Us - Royal Ambassadors']);
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
    .contact-info-card {
        background: var(--panel);
        border: 1px solid rgba(255,255,255,.07);
        border-radius: var(--radius);
        padding: 40px;
    }
    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 24px;
    }
    .info-item .icon {
        font-size: 1.5rem;
        color: var(--accent-2);
        padding-top: 4px;
    }
    .info-item h4 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 4px;
    }
    .info-item p {
        color: var(--muted);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        color: var(--muted);
        font-weight: 600;
        margin-bottom: 8px;
    }
    .form-control {
        width: 100%;
        padding: 14px 18px;
        border-radius: 10px;
        border: 1px solid rgba(255,255,255,.1);
        background-color: var(--panel-2);
        color: var(--text);
        font-size: 1rem;
        transition: var(--transition);
    }
    .form-control:focus {
        outline: none;
        border-color: var(--accent-1);
    }
    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }
</style>

<!-- Page Header -->
<header class="page-header">
    <h1>Get In Touch</h1>
    <p>We'd love to hear from you. Send us a message or find our contact details below.</p>
</header>

<!-- Contact Layout -->
<div class="contact-layout">
    <div class="contact-form-card">
        <h3>Send a Message</h3>
        <form action="/contact" method="POST">
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
                <label for="message">Message</label>
                <textarea id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <div class="contact-info-card">
        <div class="info-item">
            <i class="ri-map-pin-line icon"></i>
            <div>
                <h4>Address</h4>
                <p>Ogun Baptist Conference HQ, Abeokuta, Ogun State, Nigeria.</p>
            </div>
        </div>
        <div class="info-item">
            <i class="ri-mail-line icon"></i>
            <div>
                <h4>Email</h4>
                <p>contact@ra-ogun.org</p>
            </div>
        </div>
        <div class="info-item">
            <i class="ri-phone-line icon"></i>
            <div>
                <h4>Phone</h4>
                <p>+234 123 456 7890</p>
            </div>
        </div>
    </div>
</div>
