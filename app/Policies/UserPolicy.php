<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, User $model): bool
    {
        //editing and updating a user
        return $user->is_admin || $user->is($model);
    }
}
