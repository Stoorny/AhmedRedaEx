<?php

namespace App\Policies;

use App\User;
use App\exam;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExamPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\exam  $exam
     * @return mixed
     */
    public function before(User $user){
            if ($user->tel= 1005628982) {
                return true;
            }
    }
    public function view(User $user, exam $exam)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\exam  $exam
     * @return mixed
     */
    public function update(User $user, exam $exam)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\exam  $exam
     * @return mixed
     */
    public function delete(User $user, exam $exam)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\exam  $exam
     * @return mixed
     */
    public function restore(User $user, exam $exam)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\exam  $exam
     * @return mixed
     */
    public function forceDelete(User $user, exam $exam)
    {
        //
    }
}
