<?php

namespace App\Providers;

use App\Nova\Admin;
use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Nova\User;
use App\Nova\Post;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
            new \Wilburpowery\RoutesCached\RoutesCached,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            // ...
            \Vyuldashev\NovaPermission\NovaPermissionTool::make(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * 注册应用程序的 Nova 资源。
     *
     * @return void
     */
    protected function resources()
    {
        Nova::resourcesIn(app_path('Nova'));

        Nova::resources([

        ]);
    }
}
