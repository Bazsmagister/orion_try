<?php

namespace App\Policies;

use App\Models\Substance;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

// class SubstancePolicy
// {
//     use HandlesAuthorization;

//     /**
//      * Determine whether the user can view any models.
//      *
//      * @param  \App\Models\User  $user
//      * @return mixed
//      */
//     public function viewAny(User $user)
//     {
//         return true;
//     }

//     /**
//      * Determine whether the user can view the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Substance  $substance
//      * @return mixed
//      */
//     public function view(User $user, Substance $substance)
//     {
//         //
//         return true;
//     }

//     /**
//      * Determine whether the user can create models.
//      *
//      * @param  \App\Models\User  $user
//      * @return mixed
//      */
//     public function create(User $user)
//     {
//         //
//         return true;
//     }

//     /**
//      * Determine whether the user can update the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Substance  $substance
//      * @return mixed
//      */
//     public function update(User $user, Substance $substance)
//     {
//         //
//         return true;
//     }

//     /**
//      * Determine whether the user can delete the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Substance  $substance
//      * @return mixed
//      */
//     public function delete(User $user, Substance $substance)
//     {
//         //
//         return true;
//     }

//     /**
//      * Determine whether the user can restore the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Substance  $substance
//      * @return mixed
//      */
//     public function restore(User $user, Substance $substance)
//     {
//         //
//         return true;
//     }

//     /**
//      * Determine whether the user can permanently delete the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Substance  $substance
//      * @return mixed
//      */
//     public function forceDelete(User $user, Substance $substance)
//     {
//         //
//         return true;
//     }
// }
