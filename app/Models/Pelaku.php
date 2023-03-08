<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Jenisuttp;
use App\Models\Kecamatan;
use App\Models\Kategoriusaha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelaku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoriusaha_id',
        'kecamatan_id',
        'desa_id',
        'jenisuttp_id',
        'nik',
        'nama',
        'nama_usaha',
        'alamat',
        'latitude',
        'longitude',
    ];

    public function kategoriusaha()
    {
        return $this->belongsTo(Kategoriusaha::class);
    }

    public function kecanatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function jenisuttp()
    {
        return $this->belongsTo(Jenisuttp::class);
    }
}
