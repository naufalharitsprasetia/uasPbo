<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jenis_pertanyaan()
    {
        return $this->belongsTo(JenisPertanyaan::class);
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
