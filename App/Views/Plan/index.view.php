<?php

/** @var \Framework\Support\LinkGenerator $link */
?>
<a class="back-link" href="<?= $link->url('home.index') ?>">← Späť na plány</a>
<div class="plan-title-row">
    <div><h1>Push Pull Legs</h1><p class="subtitle">Tréningový plán zameraný na rozvoj sily a svalovej hmoty.</p></div>
</div>
<div class="button-row">
    <button class="button button-dark" type="button">✎ Upraviť plán</button>
    <button class="button" type="button">＋ Pridať deň</button>
    <button class="button" type="button">▤ Zmazať</button>
</div>

<nav class="tabs" aria-label="Sekcie tréningového plánu">
    <a href="#prehlad">Prehľad</a><a class="tab-active" href="#dni">Dni plánu</a><a href="#statistiky">Štatistiky</a>
</nav>

<section class="plan-panel" id="dni">
    <div class="day-tabs">
        <button class="day-active" type="button">Pondelok – Push</button>
        <button type="button">Streda – Pull</button>
        <button type="button">Piatok – Legs</button>
    </div>
    <div class="exercise-list">
        <div class="list-heading"><h2>Cviky v tomto dni</h2><span>5 cvikov</span></div>
        <article class="exercise-row">
            <span class="order">1</span><div class="exercise-thumb">▧</div><div class="exercise-details"><h3>Bench Press</h3><p>4 série × 8–12 opakovaní</p></div><span class="drag">⠿</span><button class="more" type="button" aria-label="Ďalšie možnosti pre Bench Press">⋮</button>
        </article>
        <article class="exercise-row">
            <span class="order">2</span><div class="exercise-thumb">▧</div><div class="exercise-details"><h3>Overhead Press</h3><p>3 série × 8–12 opakovaní</p></div><span class="drag">⠿</span><button class="more" type="button" aria-label="Ďalšie možnosti pre Overhead Press">⋮</button>
        </article>
        <article class="exercise-row">
            <span class="order">3</span><div class="exercise-thumb">▧</div><div class="exercise-details"><h3>Incline Dumbbell Press</h3><p>3 série × 10–12 opakovaní</p></div><span class="drag">⠿</span><button class="more" type="button" aria-label="Ďalšie možnosti pre Incline Dumbbell Press">⋮</button>
        </article>
        <article class="exercise-row">
            <span class="order">4</span><div class="exercise-thumb">▧</div><div class="exercise-details"><h3>Lateral Raise</h3><p>3 série × 12–15 opakovaní</p></div><span class="drag">⠿</span><button class="more" type="button" aria-label="Ďalšie možnosti pre Lateral Raise">⋮</button>
        </article>
        <article class="exercise-row">
            <span class="order">5</span><div class="exercise-thumb">▧</div><div class="exercise-details"><h3>Triceps Pushdown</h3><p>3 série × 10–12 opakovaní</p></div><span class="drag">⠿</span><button class="more" type="button" aria-label="Ďalšie možnosti pre Triceps Pushdown">⋮</button>
        </article>
        <button class="button add-exercise" type="button">＋ Pridať cvik</button>
    </div>
</section>
