<?php

/** @var \App\Models\Exercise[] $exercises */
/** @var \Framework\Support\LinkGenerator $link */
?>
<div class="page-heading">
    <div>
        <h1>Katalóg cvikov</h1>
        <p class="subtitle">Počet cvikov v databáze: <?= count($exercises) ?></p>
    </div>
    <a class="button button-dark" href="<?= $link->url('exercise.add') ?>">＋ Pridať cvik</a>
</div>

<?php if (count($exercises) === 0) : ?>
    <p class="empty-state">Zatiaľ tu nie sú žiadne cviky. Pridaj prvý pomocou tlačidla vyššie.</p>
<?php else : ?>
    <table class="data-table">
        <thead>
        <tr>
            <th>Názov</th>
            <th>Svalová partia</th>
            <th>Obtiažnosť</th>
            <th>Popis</th>
            <th><span class="visually-hidden">Akcie</span></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($exercises as $exercise) : ?>
            <tr>
                <td data-label="Názov"><strong><?= e($exercise->getName()) ?></strong></td>
                <td data-label="Svalová partia"><span class="tag"><?= e($exercise->getMuscleGroup()) ?></span></td>
                <td data-label="Obtiažnosť"><?= e($exercise->getDifficulty()) ?></td>
                <td data-label="Popis" class="muted"><?= e($exercise->getDescription() ?? '–') ?></td>
                <td>
                    <div class="row-actions">
                        <a class="button" href="<?= $link->url('exercise.edit', ['id' => $exercise->getId()]) ?>">✎ Upraviť</a>
                        <form method="post" action="<?= $link->url('exercise.delete') ?>"
                              data-confirm="Naozaj chceš zmazať cvik <?= e($exercise->getName()) ?>?">
                            <input type="hidden" name="id" value="<?= $exercise->getId() ?>">
                            <button class="button button-danger" type="submit">Zmazať</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>
