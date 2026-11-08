<?php

namespace App\Models;

use Framework\Core\Model;

/**
 * Class Exercise
 * Model cviku, zodpovedá DB tabuľke `exercises`.
 *
 * @package App\Models
 */
class Exercise extends Model
{
    /** Povolené svalové partie (hodnoty pre <select> vo formulári). */
    public const MUSCLE_GROUPS = ['Prsia', 'Chrbát', 'Nohy', 'Ramená', 'Ruky', 'Brucho'];

    /** Povolené obtiažnosti (hodnoty pre <select> vo formulári). */
    public const DIFFICULTIES = ['Ľahká', 'Stredná', 'Náročná'];

    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $muscleGroup = null;
    protected ?string $difficulty = null;
    protected ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getMuscleGroup(): ?string
    {
        return $this->muscleGroup;
    }

    public function setMuscleGroup(string $muscleGroup): void
    {
        $this->muscleGroup = $muscleGroup;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): void
    {
        $this->difficulty = $difficulty;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
