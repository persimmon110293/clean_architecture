<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetUserRequest;
use App\Packages\UseCases\User\Get\IGetUserUseCase;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;

class GetUserController extends Controller
{
    public function __invoke(GetUserRequest $request, IGetUserUseCase $interactor, UserResource $resource): JsonResponse
    {
        $user = $interactor->getUser($request->all());
        return response()->json($resource->toArray($user));
    }
}
