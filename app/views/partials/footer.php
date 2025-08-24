<footer class="footer-main">
    <div class="footer-container">
        <p>&copy; <?= date('Y') ?> Royal Ambassadors Ogun Baptist Conference. All rights reserved.</p>
    </div>
</footer>

<!-- Core Scripts -->
<script src="<?= asset('assets/js/public.js') ?>"></script>

<?php if (isset($dashboard_js) && $dashboard_js): ?>
<script src="<?= asset('assets/js/dashboard.js') ?>"></script>
<?php endif; ?>
