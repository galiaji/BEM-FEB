<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'nama' => 'JANGWIS',
                'deskripsi' => 'Program pembinaan kader Kelompok Sadar Wisata Desa...',
                'jadwal' => '2024-09-01',
                'tujuan' => 'Meningkatkan kesadaran wisata',
                'gambar' => 'jangwis.jpg',
                'slug' => null,
            ],
            [
                'nama' => 'ADBUD',
                'deskripsi' => 'Ini Di Isi Deskripsi dan sasaran kegiatannya apa a...',
                'jadwal' => '2024-10-15',
                'tujuan' => 'Meningkatkan kegiatan budaya',
                'gambar' => 'adbud.jpg',
                'slug' => null,
            ],
            [
                'nama' => 'UKCIT',
                'deskripsi' => 'Ukir Cita merupakan fasilitas yang diberikan oleh...',
                'jadwal' => '2024-11-20',
                'tujuan' => 'Meningkatkan kreatifitas ukiran',
                'gambar' => 'ukcit.jpg',
                'slug' => null,
            ],
            [
                'nama' => 'RUMLES',
                'deskripsi' => 'Ini Di Isi Deskripsi dan sasaran kegiatannya apa a...',
                'jadwal' => '2024-10-15',
                'tujuan' => 'Meningkatkan literasi masyarakat',
                'gambar' => 'rumles.jpg',
                'slug' => null,
            ],
            [
                'nama' => 'JAWIR',
                'deskripsi' => 'WZESXDRCTFVGIBUONJIKML,OMJIVVTCRXS6DCVGBH',
                'jadwal' => '2024-11-20',
                'tujuan' => 'Program kesejahteraan',
                'gambar' => 'jawir.jpg',
                'slug' => null,
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
