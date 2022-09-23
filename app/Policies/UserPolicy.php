<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function profile(User $user, $author)
    {
        return  auth()->user()->type === 1 || auth()->user()->email === $author->email;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function performAction(User $user)
    {
       return auth()->user()->type === 1 && auth()->user()->hasRole("Administrator");
    }

}
