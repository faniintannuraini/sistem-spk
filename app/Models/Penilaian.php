<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penilaian extends Model
{
    // Define explicit table name just in case because Laravel plurals for Penilaian could sometimes be custom
    protected $table = 'penilaians';

    protected $fillable = [
        'laptop_id',
        'kriteria_id',
        'sub_kriteria_id',
    ];

    public function laptop(): BelongsTo
    {
        return $this->belongsTo(Laptop::class);
    }

    public function kriteria(): BelongsTo
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function subKriteria(): BelongsTo
    {
        return $this->belongsTo(SubKriteria::class, 'sub_kriteria_id');
    }
}
