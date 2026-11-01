<?php

/** @var \Framework\Support\LinkGenerator $link */
?>
<section class="welcome">
    <div class="placeholder-banner"><span class="image-symbol">▧</span><p>Placeholder pre banner alebo prehľad</p></div>
    <h1>Vitaj v aplikácii Fitify!</h1>
    <p class="subtitle">Tvoj osobný tréningový asistent</p>
</section>

<section class="feature-section">
    <h2>Hlavné sekcie</h2>
    <div class="feature-grid">
        <a class="feature-card" href="#cviky"><span class="feature-icon">✚</span><h3>Cviky</h3><p>Katalóg cvikov</p></a>
        <a class="feature-card" href="<?= $link->url('plan.index') ?>"><span class="feature-icon">▦</span><h3>Tréningové plány</h3><p>Správa tréningových plánov</p></a>
        <a class="feature-card" href="#statistiky"><span class="feature-icon">▥</span><h3>Štatistiky</h3><p>Prehľad tréningového progresu</p></a>
        <a class="feature-card" href="#profil"><span class="feature-icon">♙</span><h3>Profil</h3><p>Používateľské nastavenia</p></a>
    </div>
</section>

<section class="exercise-section">
    <div class="section-heading"><h2>Najnovšie cviky</h2><a href="#cviky">Zobraziť všetky →</a></div>
    <div class="exercise-preview-grid">
        <article class="exercise-preview"><div class="small-image">▧</div><div class="preview-info"><h3>Bench Press</h3><span class="tag">Prsia</span></div></article>
        <article class="exercise-preview"><div class="small-image">▧</div><div class="preview-info"><h3>Squat</h3><span class="tag">Nohy</span></div></article>
        <article class="exercise-preview"><div class="small-image">▧</div><div class="preview-info"><h3>Deadlift</h3><span class="tag">Chrbát</span></div></article>
        <article class="exercise-preview"><div class="small-image">▧</div><div class="preview-info"><h3>Pull Up</h3><span class="tag">Chrbát</span></div></article>
    </div>
</section>
