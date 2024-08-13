<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',  // Updated from 'nama_program'
        'deskripsi',  // Updated from 'deskripsi_program'
        'jadwal',
        'tujuan',
        'slug',
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
