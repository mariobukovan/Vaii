<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */

// URL aktuálneho kontroléra – slúži na zvýraznenie aktívnej položky v menu
// (napr. "Cviky" je aktívne na zozname aj na formulároch ?c=exercise&a=add/edit)
$current = $link->url([]) . '&';
$isActive = fn(string $controller): bool => str_starts_with($current, $link->url($controller . '.index') . '&');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/favicon-32x32.png') ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>" defer></script>
</head>
<body>
<header class="topbar">
    <a class="brand" href="<?= $link->url('home.index') ?>" aria-label="Fitify – domov"><span class="brand-icon">✚</span> Fitify</a>
    <nav class="top-nav" aria-label="Hlavná navigácia">
        <a class="<?= $isActive('home') ? 'active' : '' ?>" href="<?= $link->url('home.index') ?>">Domov</a>
        <a class="<?= $isActive('exercise') ? 'active' : '' ?>" href="<?= $link->url('exercise.index') ?>">Cviky</a>
        <a class="<?= $isActive('plan') ? 'active' : '' ?>" href="<?= $link->url('plan.index') ?>">Plány</a>
        <a href="#statistiky">Štatistiky</a>
        <a href="#profil">Profil</a>
    </nav>
    <div class="header-icons"><span aria-label="Hľadať">⌕</span><span class="avatar" aria-label="Profil používateľa">M</span></div>
</header>

<div class="app-layout">
    <aside class="sidebar">
        <nav aria-label="Bočná navigácia">
            <a class="<?= $isActive('home') ? 'side-active' : '' ?>" href="<?= $link->url('home.index') ?>"><span>⌂</span> Domov</a>
            <a class="<?= $isActive('exercise') ? 'side-active' : '' ?>" href="<?= $link->url('exercise.index') ?>"><span>✚</span> Cviky</a>
            <a class="<?= $isActive('plan') ? 'side-active' : '' ?>" href="<?= $link->url('plan.index') ?>"><span>▦</span> Plány</a>
            <a href="#statistiky"><span>▥</span> Štatistiky</a>
            <a href="#profil"><span>♙</span> Profil</a>
        </nav>
    </aside>

    <main class="main-content">
        <?= $contentHTML ?>
        <footer class="footer">Fitify | Tvoj cieľ. Tvoja motivácia.</footer>
    </main>
</div>
</body>
</html>
