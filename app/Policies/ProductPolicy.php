<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Tentukan apakah user bisa melihat daftar produk.
     */
    public function viewAny(User $user): bool
    {
        return true; // Izinkan semua user yang login untuk melihat list
    }

    /**
     * Tentukan apakah user bisa membuat produk.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin'; // Hanya admin yang boleh buat produk
    }

    /**
     * Logika Inti Penugasan: Update
     * Hanya admin yang bisa edit data miliknya sendiri.
     */
    public function update(User $user, Product $product): bool
    {
        return $user->role === 'admin' && $user->id === $product->user_id;
    }

    /**
     * Logika Inti Penugasan: Delete
     * Hanya admin yang bisa hapus data miliknya sendiri.
     */
    public function delete(User $user, Product $product): bool
    {
        return $user->role === 'admin' && $user->id === $product->user_id;
    }
}