<?php
namespace App\UsesCases\Contracts;

interface StraightUseCaseInterface
{
    /**
     * Validar si es escalera un array de numeros
     * @param array $straight
     * @return bool
     */
    public function validateStraight(array $straight): bool;
}
