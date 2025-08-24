<?php
$this->layout('main', ['title' => 'Login - Royal Ambassadors']);
?>

<style>
    /* This style block should be moved to a dedicated CSS file in a later refactor. */
    .auth-section {
        min-height: calc(100vh - 80px); /* Adjust for footer height */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 24px;
    }
    .auth-card {
        background: var(--panel);
        border: 1px solid rgba(255,255,255,.07);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 40px;
        width: 100%;
        max-width: 450px;
        text-align: center;
    }
    .auth-card .brand {
        justify-content: center;
        margin-bottom: 24px;
    }
    .auth-card h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .auth-card p {
        color: var(--muted);
        margin-bottom: 32px;
    }
    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }
    .form-group label {
        display: block;
        color: var(--muted);
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 0.9rem;
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
        box-shadow: 0 0 0 3px rgba(25,140,255,.2);
    }
    .btn-full {
        width: 100%;
        padding: 16px;
        font-size: 1rem;
    }
    .auth-footer {
        margin-top: 24px;
        color: var(--muted);
    }
    .auth-footer a {
        color: var(--accent-2);
        text-decoration: none;
        font-weight: 600;
    }
</style>

<section class="auth-section">
    <div class="auth-card">
        <div class="brand">
            <div class="logo-container">
                <img src="<?= asset('assets/images/logo.png') ?>" alt="Logo" style="height: 45px;">
            </div>
            <div class="title">Royal Ambassadors</div>
        </div>
        <h2>Welcome Back</h2>
        <p>Enter your credentials to access your portal.</p>

        <form action="/login" method="POST">
            <div class="form-group">
                <label for="email">Email or Unique ID</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-full">
                <i class="ri-login-circle-line"></i>
                Login
            </button>
        </form>

        <div class="auth-footer">
            <p>Don't have an account? <a href="/register">Join Now</a></p>
        </div>
    </div>
</section>
