<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once __DIR__ . '/../partials/head.php'; ?>
    <link rel="stylesheet" href="<?= asset('assets/css/dashboard.css') ?>">
</head>
<body>
    <div class="dashboard-layout">

        <?php include_once __DIR__ . '/../partials/sidebar.php'; ?>

        <div class="main-content-wrapper">
            <?= $content ?? '' ?>
        </div>

    </div>

    <?php include_once __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
