<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Siswa extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'nis',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'nama_orang_tua', // JSON
    ];
    
    protected $casts = [
        'nama_orang_tua' => 'array',
    ];

    // Relasi
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
