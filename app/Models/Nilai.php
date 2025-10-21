<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'siswa_id',
        'mapel_id',
        'nilai_harian',
        'nilai_uts',
        'nilai_uas',
    ];

    // Relasi
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
