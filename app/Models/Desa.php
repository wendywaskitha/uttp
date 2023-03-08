<?php

namespace App\Models;

use App\Models\Pelaku;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kecamatan_id',
        'nm_desa'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function pelaku()
    {
        return $this->hasMany(Pelaku::class);
    }
}
