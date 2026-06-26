<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Laptop extends Model
{
    protected $fillable = [
        'kode_laptop',
        'nama_laptop',
        'merek',
        'deskripsi',
        'gambar',
    ];

    public function penilaians(): HasMany
    {
        return $this->hasMany(Penilaian::class);
    }
}
