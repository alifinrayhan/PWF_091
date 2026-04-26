<?php

namespace App\Providers;

use App\Models\User;
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
     */
    public function boot(): void
    {
        // Gate untuk ekspor produk yang sudah kamu buat
        Gate::define('export-product', function (User $user) {
            return $user->role === 'admin';
        });

        // TAMBAHKAN INI: Gate khusus untuk akses menu Category sesuai soal UCP 1
        Gate::define('manage-category', function (User $user) {
            return $user->role === 'admin'; // Hanya admin yang boleh [cite: 84]
        });
    }
}