<?php

/** @var \App\Models\Exercise $exercise */
/** @var string[] $errors */
/** @var \Framework\Support\LinkGenerator $link */

use App\Models\Exercise;

?>
<a class="back-link" href="<?= $link->url('exercise.index') ?>">← Späť na cviky</a>
<h1><?= $exercise->getId() ? 'Úprava cviku' : 'Nový cvik' ?></h1>
<p class="subtitle">Polia označené * sú povinné.</p>

<?php if (count($errors) > 0) : ?>
    <div class="alert">
        <?php foreach ($errors as $error) : ?>
            <div><?= e($error) ?></div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<form class="form" method="post" action="<?= $link->url('exercise.save') ?>">
    <input type="hidden" name="id" value="<?= $exercise->getId() ?>">

    <div class="form-field">
        <label for="name">Názov cviku *</label>
        <input id="name" name="name" type="text" maxlength="100" required
               value="<?= e($exercise->getName()) ?>">
    </div>

    <div class="form-row">
        <div class="form-field">
            <label for="muscleGroup">Svalová partia *</label>
            <select id="muscleGroup" name="muscleGroup" required>
                <option value="">– vyber –</option>
                <?php foreach (Exercise::MUSCLE_GROUPS as $group) : ?>
                    <option value="<?= e($group) ?>" <?= $exercise->getMuscleGroup() === $group ? 'selected' : '' ?>><?= e($group) ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-field">
            <label for="difficulty">Obtiažnosť *</label>
            <select id="difficulty" name="difficulty" required>
                <option value="">– vyber –</option>
                <?php foreach (Exercise::DIFFICULTIES as $difficulty) : ?>
                    <option value="<?= e($difficulty) ?>" <?= $exercise->getDifficulty() === $difficulty ? 'selected' : '' ?>><?= e($difficulty) ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="form-field">
        <label for="description">Popis</label>
        <textarea id="description" name="description" rows="4"><?= e($exercise->getDescription()) ?></textarea>
    </div>

    <div class="button-row">
        <button class="button button-dark" type="submit">Uložiť</button>
        <a class="button" href="<?= $link->url('exercise.index') ?>">Zrušiť</a>
    </div>
</form>
