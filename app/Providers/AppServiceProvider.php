<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bu yerga servislar registratsiyasi qo'yiladi (masalan, IoC container binding)
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Bu yerga ilova ishga tushganda bajariladigan kodlar yoziladi
        // Masalan, view composerlari, makroslar yoki global konfiguratsiyalar

        // Misol uchun: 
        // \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}
