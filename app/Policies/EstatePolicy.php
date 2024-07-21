<?php

namespace App\Policies;

use App\Models\Estate;
use App\Models\User;

class EstatePolicy
{
    /**
     * Create a new policy instance.
     */
    public function Update(User $user, Estate $estate): bool
    {
        return ($user->is_admin || $user->id === $estate->user_id);
    }

    public function destroy(User $user, Estate $estate): bool
    {
        return ($user->is_admin || $user->id === $estate->user_id);
    }
}
