<?php

namespace App\Models;

use App\Models\Pelaku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenisuttp extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_uttps'
    ];

    public function pelaku()
    {
        return $this->hasMany(Pelaku::class);
    }
}
