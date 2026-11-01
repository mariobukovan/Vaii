<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */

// URL aktuálnej stránky (aktuálny kontrolér + akcia) – slúži na zvýraznenie aktívnej položky v menu
$current = $link->url([]);
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
</head>
<body>
<header class="topbar">
    <a class="brand" href="<?= $link->url('home.index') ?>" aria-label="Fitify – domov"><span class="brand-icon">✚</span> Fitify</a>
    <nav class="top-nav" aria-label="Hlavná navigácia">
        <a class="<?= $current == $link->url('home.index') ? 'active' : '' ?>" href="<?= $link->url('home.index') ?>">Domov</a>
        <a href="#cviky">Cviky</a>
        <a class="<?= $current == $link->url('plan.index') ? 'active' : '' ?>" href="<?= $link->url('plan.index') ?>">Plány</a>
        <a href="#statistiky">Štatistiky</a>
        <a href="#profil">Profil</a>
    </nav>
    <div class="header-icons"><span aria-label="Hľadať">⌕</span><span class="avatar" aria-label="Profil používateľa">M</span></div>
</header>

<div class="app-layout">
    <aside class="sidebar">
        <nav aria-label="Bočná navigácia">
            <a class="<?= $current == $link->url('home.index') ? 'side-active' : '' ?>" href="<?= $link->url('home.index') ?>"><span>⌂</span> Domov</a>
            <a href="#cviky"><span>✚</span> Cviky</a>
            <a class="<?= $current == $link->url('plan.index') ? 'side-active' : '' ?>" href="<?= $link->url('plan.index') ?>"><span>▦</span> Plány</a>
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
