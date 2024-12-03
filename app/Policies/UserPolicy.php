<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
       return $user->email === 'joedoe@gmail.com';
    }

    public function update(User $user): bool
    {
        return Auth::user()->id === $user->id;
    }
}
