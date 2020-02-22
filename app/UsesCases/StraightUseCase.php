<?php

namespace App\UsesCases;

use App\UsesCases\Contracts\StraightUseCaseInterface;

class StraightUseCase implements StraightUseCaseInterface
{

    /**
     * Validar si es escalera un array de numeros
     * @param array $straight
     * @return bool
     */
    public function validateStraight(array $straight): bool
    {
        $straight = $this->formatStraight($straight);
        $firstNumber = 0;
        $straightNumber = 1;
        $isStraight = false;
        foreach ($straight as $item) {
            if ($firstNumber + 1 == $item and $firstNumber) {
                $straightNumber++;
                if ($straightNumber >= 5) {
                    $isStraight = true;
                    break;
                }
            } else {
                $straightNumber = 1;
            }
            $firstNumber = $item;
        }
        return $isStraight;
    }

    /**
     * Ordena el array y valida el AS
     * @param array $straight
     * @return array
     */
    private function formatStraight(array $straight): array
    {
        if (in_array(14, $straight)) {
            $straight[] = 1;
        }
        $straight = array_unique($straight);
        sort($straight);
        return $straight;
    }
}
