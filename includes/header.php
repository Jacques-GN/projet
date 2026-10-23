<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titre ?? 'Cosmétiques', ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <?php if (isset($pageCss)): ?>
        <link rel="stylesheet" href="css/<?= htmlspecialchars($pageCss, ENT_QUOTES, 'UTF-8') ?>">
    <?php endif; ?>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a href="index.php" class="logo">Cosmétiques</a>
        <nav class="nav">
            <a href="index.php">Accueil</a>
            <a href="catalogue.php">Catalogue</a>
            <a href="apropos.php">À propos</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main>