<?php include __DIR__ . '/src/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $developer['name']; ?> - <?php echo $developer['title']; ?></title>
    <link rel="stylesheet" href="/frontend/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <?php include __DIR__ . '/src/partials/header.php'; ?>

    <main>
        <?php include __DIR__ . '/src/sections/home.php'; ?>
        <?php include __DIR__ . '/src/sections/projects.php'; ?>
        <?php include __DIR__ . '/src/sections/experience.php'; ?>
        <?php include __DIR__ . '/src/sections/contact.php'; ?>
        <?php include __DIR__ . '/src/sections/skills.php'; ?>
    </main>

    <?php include __DIR__ . '/src/partials/footer.php'; ?>

    <script src="/backend/index.js"></script>
</body>
</html>
