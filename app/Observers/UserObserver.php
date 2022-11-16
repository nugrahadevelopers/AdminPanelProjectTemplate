<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function created(User $param)
    {
        $param->assignRole(request()->role_id);
    }

    public function updated(User $param)
    {
        if (request()->role_id) {
            $param->syncRoles(request()->role_id);
        }
    }
}
