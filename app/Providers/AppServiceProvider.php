<?php

namespace App\Providers;

use App\UsesCases\Contracts\StraightUseCaseInterface;
use App\UsesCases\StraightUseCase;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $classes = [
        StraightUseCaseInterface::class => StraightUseCase::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
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
