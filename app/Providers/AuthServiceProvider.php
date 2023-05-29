<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Policies\ActivityLogPolicy;
use App\Policies\AuthorPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\IpPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PostPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Stephenjude\FilamentBlog\Models\Author;
use Stephenjude\FilamentBlog\Models\Category;
use SolutionForest\FilamentFirewall\Models\Ip;
use Stephenjude\FilamentBlog\Models\Post;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Role::class => RolePolicy::class,
        Activity::class => ActivityLogPolicy::class,
        User::class => UserPolicy::class,
        Permission::class => PermissionPolicy::class,
        Author::class => AuthorPolicy::class,
        Category::class => CategoryPolicy::class,
        Ip::class => IpPolicy::class,
        Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
