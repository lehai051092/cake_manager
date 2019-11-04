<?php

namespace App\Providers;

use App\Http\Responsitories\CakeResponsitoryInterface;
use App\Http\Responsitories\Eloquent\CakeResponsitoryEloquent;
use App\Http\Services\CakeServiceInterface;
use App\Http\Services\Imp\CakeServiceImp;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CakeResponsitoryInterface::class, CakeResponsitoryEloquent::class);
        $this->app->singleton(CakeServiceInterface::class, CakeServiceImp::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
