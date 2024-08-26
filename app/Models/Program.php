<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'jadwal',
        'tujuan',
        'gambar',
        'slug',
    ];
    protected $casts = [
        'gambar' => 'array', // Cast gambar as an array to handle multiple images
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            if (empty($program->slug)) {
                $program->slug = Str::slug($program->nama);
            }
        });
    }
}
