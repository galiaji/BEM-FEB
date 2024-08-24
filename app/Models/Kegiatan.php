<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    // Allow mass assignment for these fields
    protected $fillable = [
        'nama_kegiatan',
        'foto_kegiatan',
        'deskripsi_kegiatan',
        'program_id',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kegiatan) {
            $kegiatan->slug = Str::slug($kegiatan->nama_kegiatan);
        });
    }
    /**
     * Define a relationship to the Program model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
