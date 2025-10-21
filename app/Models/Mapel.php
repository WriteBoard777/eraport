<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama_mapel',
        'kode_mapel',
    ];

    // Relasi Many-to-Many dengan User
    public function users()
    {
        return $this->belongsToMany(User::class, 'mapel_user')
                    ->withTimestamps();
    }

    // Relasi ke TP (Tujuan Pembelajaran)
    public function tp()
    {
        return $this->hasMany(Tp::class);
    }

    // Relasi ke Nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
