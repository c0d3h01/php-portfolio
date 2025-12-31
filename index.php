<?php include __DIR__ . '/src/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $developer['name']; ?> - <?php echo $developer['title']; ?></title>
    <link rel="stylesheet" href="/src/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <?php include __DIR__ . '/src/components/header.php'; ?>

    <main>
        <?php include __DIR__ . '/src/components/home.php'; ?>
        <?php include __DIR__ . '/src/components/projects.php'; ?>
        <?php include __DIR__ . '/src/components/experience.php'; ?>
        <?php include __DIR__ . '/src/components/contact.php'; ?>
        <?php include __DIR__ . '/src/components/skills.php'; ?>
    </main>

    <?php include __DIR__ . '/src/components/footer.php'; ?>

    <script src="/src/index.js"></script>
</body>

</html>
