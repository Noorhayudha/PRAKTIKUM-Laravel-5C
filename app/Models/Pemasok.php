<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    use HasFactory;
    protected $table = 'pemasok';
    protected $guarded = [];

    public function barangMasuks()
    {
        return $this->hasMany(BarangMasuk::class);
    }
}
