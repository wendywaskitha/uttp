<?php

namespace App\Models;

use App\Models\Pelaku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoriusaha extends Model
{
    use HasFactory;

    protected $fillable =[
        'kategori'
    ];

    public function pelaku()
    {
        return $this->hasMany(Pelaku::class);
    }
}
