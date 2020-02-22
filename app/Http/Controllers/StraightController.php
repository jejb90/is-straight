<?php

namespace App\Http\Controllers;

use App\Http\Requests\StraightRequest;
use App\UsesCases\Contracts\StraightUseCaseInterface;
use Illuminate\Http\JsonResponse;

class StraightController extends Controller
{

    /**
     * Validar si es escalera un array de numeros
     * @param StraightRequest $request
     * @param StraightUseCaseInterface $straightUseCase
     * @return JsonResponse
     */
    public function isStraight(StraightRequest $request, StraightUseCaseInterface $straightUseCase): JsonResponse{
        return response()->json([
            'data' => $straightUseCase->validateStraight($request->straight)
        ])->setStatusCode(200);
    }
}
