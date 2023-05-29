<?php

namespace App\Policies;

use App\Models\User;
use Stephenjude\FilamentBlog\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        return $user->can('view_any_post');
    }


    public function view(User $user, Post $post)
    {
        return $user->can('view_post');
    }


    public function create(User $user)
    {
        return $user->can('create_post');
    }

    public function update(User $user, Post $post)
    {
        return $user->can('update_post');
    }


    public function delete(User $user, Post $post)
    {
        return $user->can('delete_post');
    }


    public function deleteAny(User $user)
    {
        return $user->can('delete_any_post');
    }


    public function forceDelete(User $user, Post $post)
    {
        return $user->can('{{ ForceDelete }}');
    }


    public function forceDeleteAny(User $user)
    {
        return $user->can('{{ ForceDeleteAny }}');
    }


    public function restore(User $user, Post $post)
    {
        return $user->can('{{ Restore }}');
    }


    public function restoreAny(User $user)
    {
        return $user->can('{{ RestoreAny }}');
    }


    public function replicate(User $user, Post $post)
    {
        return $user->can('{{ Replicate }}');
    }


    public function reorder(User $user)
    {
        return $user->can('{{ Reorder }}');
    }
}
