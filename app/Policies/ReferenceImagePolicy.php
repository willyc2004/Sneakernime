<?php

namespace App\Policies;

<<<<<<< Updated upstream
use App\Models\ReferenceImage;
use App\Models\User;
use Illuminate\Auth\Access\Response;
=======
use Illuminate\Auth\Access\Response;
use App\Models\ReferenceImage;
use App\Models\User;
>>>>>>> Stashed changes

class ReferenceImagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ReferenceImage $referenceImage): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ReferenceImage $referenceImage): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ReferenceImage $referenceImage): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ReferenceImage $referenceImage): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ReferenceImage $referenceImage): bool
    {
        //
    }
}
