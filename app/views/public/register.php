<?php
$this->layout('main', ['title' => 'Register - Royal Ambassadors']);
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
        max-width: 550px;
        text-align: center;
    }
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .form-group.full-width {
        grid-column: 1 / -1;
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
        <h2>Create Your Account</h2>
        <p>Join the digital portal and start your journey.</p>

        <form action="/register" method="POST">
            <div class="form-grid">
                <div class="form-group full-width">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="church">Church</label>
                    <input type="text" id="church" name="church" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" class="form-control" required>
                </div>
                <div class="form-group full-width">
                    <label for="association">Association</label>
                    <select id="association" name="association_id" class="form-control" required>
                        <option value="">-- Select Association --</option>
                        <!-- Options will be populated dynamically later -->
                    </select>
                </div>
                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-full" style="margin-top: 20px;">
                <i class="ri-user-add-line"></i>
                Register Now
            </button>
        </form>

        <div class="auth-footer">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</section>
