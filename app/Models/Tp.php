<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Tp extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'mapel_id',
        'deskripsi',
    ];

    // Relasi
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
