<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once __DIR__ . '/../partials/head.php'; ?>
</head>
<body>

    <?php include_once __DIR__ . '/../partials/topnav.php'; ?>

    <main>
        <?= $content ?? '' ?>
    </main>

    <?php include_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>
