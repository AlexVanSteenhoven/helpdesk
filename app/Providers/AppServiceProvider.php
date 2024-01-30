<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * @throws \Exception
     */
    public function boot(): void
    {
        $permissionMigrationRan = DB::table('migrations')
            ->where(
                'migration',
                '=',
                '2024_01_30_095405_create_permissions_table'
            )->exists();

        if ($permissionMigrationRan) {
            $permissions = Permission::all();

            foreach ($permissions as $permission) {
                Gate::define($permission->name, function (User $user) use ($permission) {
                    return $user->hasPermission($permission->name);
                });
            }
        } else {
            throw new \Exception('The required migrations are not ran yet. Please do this first');
        }
    }
}
