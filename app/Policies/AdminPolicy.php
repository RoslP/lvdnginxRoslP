<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdminPolicy
{
    public function isAdmin(User $user): bool
    {
        return $user->is_admin === 1;
    }

}
