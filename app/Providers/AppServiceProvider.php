<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useTailwind();
        Model::unguard();

        Gate::define('admin', function (User $user){
           return $user?->is_admin;
        });
        /* Then we can use:
         * Gate::allows('admin')             :boolean
         * auth()->user()->can('admin')      :boolean
         * request()->user()->can('admin)    :boolean
         * request()->user()->cannot('admin) :boolean
         * $this->authorize('admin') [Controller]
         * |-> if is author passes but if isn't automatically return 403
        */
        Blade::if('admin', function () {
            return auth()->user()?->can('admin');
        });

    }
}
