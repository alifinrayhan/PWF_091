<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Mengatur nama tabel secara manual karena di soal diminta 'category' (tunggal)
    protected $table = 'category';

    protected $fillable = ['name'];

    // Relasi ke tabel Product agar withCount('products') bisa jalan
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}