<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Pelaku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_kecamatan'
    ];

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }

    public function pelaku()
    {
        return $this->hasMany(Pelaku::class);
    }
}
