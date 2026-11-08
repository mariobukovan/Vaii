<?php

namespace App\Controllers;

use App\Models\Exercise;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class ExerciseController
 * Správa cvikov – zoznam, pridanie, úprava a zmazanie (CRUD).
 *
 * @package App\Controllers
 */
class ExerciseController extends BaseController
{
    /**
     * Read – zoznam všetkých cvikov.
     */
    public function index(Request $request): Response
    {
        return $this->html(['exercises' => Exercise::getAll(orderBy: '`name` asc')]);
    }

    /**
     * Create – prázdny formulár na pridanie cviku.
     */
    public function add(Request $request): Response
    {
        return $this->html(['exercise' => new Exercise(), 'errors' => []], 'form');
    }

    /**
     * Update – formulár predvyplnený údajmi existujúceho cviku.
     */
    public function edit(Request $request): Response
    {
        $exercise = $this->getExerciseOr404((int)$request->value('id'));
        return $this->html(['exercise' => $exercise, 'errors' => []], 'form');
    }

    /**
     * Uloží nový alebo upravený cvik (spracovanie formulára metódou POST).
     */
    public function save(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405); // Method Not Allowed
        }

        // nový cvik, alebo úprava existujúceho?
        $id = (int)$request->post('id');
        $exercise = $id > 0 ? $this->getExerciseOr404($id) : new Exercise();

        $exercise->setName(trim((string)$request->post('name')));
        $exercise->setMuscleGroup((string)$request->post('muscleGroup'));
        $exercise->setDifficulty((string)$request->post('difficulty'));
        $description = trim((string)$request->post('description'));
        $exercise->setDescription($description !== '' ? $description : null);

        $errors = $this->validate($exercise);
        if (count($errors) > 0) {
            // znova zobrazíme formulár s chybami a zadanými údajmi
            return $this->html(['exercise' => $exercise, 'errors' => $errors], 'form');
        }

        $exercise->save();
        return $this->redirect($this->url('exercise.index'));
    }

    /**
     * Delete – zmaže vybraný cvik (iba metódou POST).
     */
    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }
        $exercise = $this->getExerciseOr404((int)$request->post('id'));
        $exercise->delete();
        return $this->redirect($this->url('exercise.index'));
    }

    /**
     * Načíta cvik podľa id, alebo vyhodí chybu 404.
     */
    private function getExerciseOr404(int $id): Exercise
    {
        $exercise = Exercise::getOne($id);
        if ($exercise === null) {
            throw new HttpException(404);
        }
        return $exercise;
    }

    /**
     * Základná kontrola údajov z formulára.
     *
     * @return string[] Zoznam chybových hlásení (prázdny, ak je všetko v poriadku).
     */
    private function validate(Exercise $exercise): array
    {
        $errors = [];
        if ($exercise->getName() === '') {
            $errors[] = 'Názov cviku nesmie byť prázdny.';
        } elseif (mb_strlen($exercise->getName()) > 100) {
            $errors[] = 'Názov cviku môže mať najviac 100 znakov.';
        }
        if (!in_array($exercise->getMuscleGroup(), Exercise::MUSCLE_GROUPS, true)) {
            $errors[] = 'Vyberte svalovú partiu.';
        }
        if (!in_array($exercise->getDifficulty(), Exercise::DIFFICULTIES, true)) {
            $errors[] = 'Vyberte obtiažnosť.';
        }
        return $errors;
    }
}
