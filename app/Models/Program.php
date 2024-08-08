<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_program', 'deskripsi_program', 'foto_kegiatan',
        'kegiatan_dalam_program', 'jadwal', 'tujuan', 'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            $program->slug = Str::slug($program->nama_program);
        });
    }
}
