<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function latihan()
    {
        return $this->hasMany(Latihan::class);
    }
}