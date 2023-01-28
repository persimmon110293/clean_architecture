<?php

namespace App\Http\Resources;

class UserResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($user)
    {
        return [
            'id'    => $user->id()->value,
            'name'  => $user->name()->value,
            'age'   => $user->age()->value,
            'email' => $user->email()->value,
        ];
    }
}
