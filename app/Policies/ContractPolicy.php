<?php

namespace App\Policies;

use App\Models\Contract;
use App\Models\User;

class ContractPolicy
{
    /**
     * Create a new policy instance.
     */
    public function destroy(User $user, Contract $contract): bool
    {
        return ($user->is_admin || $user->id === $contract->user_id);
    }
}
