<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Kriteria extends Model
{
    protected $fillable = [
        'kode',
        'nama',
        'atribut',
        'bobot',
    ];

    public function subKriterias(): HasMany
    {
        return $this->hasMany(SubKriteria::class);
    }

    public function penilaians(): HasMany
    {
        return $this->hasMany(Penilaian::class);
    }
}
