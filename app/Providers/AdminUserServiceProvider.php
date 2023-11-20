<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin_User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AdminUserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-access', function ($user) {
            // Logic kiểm tra quyền admin ở đây
            return $user->isAdmin();
        });
    }
    public function isAdmin()
    {
        return $this->isAdmin() === 'admin'; // Ví dụ kiểm tra theo trường role trong bảng admin_user
    }

}
