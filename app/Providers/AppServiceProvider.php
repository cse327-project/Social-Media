<?php

namespace App\Providers;

use App\Request as FriendRequest;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $reuqest_count = 0;
            if (\Auth::check()) {
                $request_this_user = FriendRequest::where(['send_to' => auth()->user()->id])->get();
                $reuqest_count = $request_this_user->count();
            }

            $view->with('reuqest_count', $reuqest_count);
        });
    }
}
