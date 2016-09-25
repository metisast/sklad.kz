<?php

namespace App\Policies;

use App\Models\Company;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Guard;

class ProfilePolicy
{
    use HandlesAuthorization;


    public function showCompany(User $user, Company $company)
    {
        return $user->id === $company->user_id;
    }
}
