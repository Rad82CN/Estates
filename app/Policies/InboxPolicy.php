<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InboxPolicy
{
    /**
     * Create a new policy instance.
     */
    public function show(User $user, User $model)
    {
        return $user->is($model) || $user->is_admin;
    }
}
