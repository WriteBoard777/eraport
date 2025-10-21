<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    public function run(): void
    {
        $mapelList = [
            ['nama_mapel' => 'Matematika', 'kode_mapel' => 'MTK'],
            ['nama_mapel' => 'Bahasa Indonesia', 'kode_mapel' => 'BINDO'],
            ['nama_mapel' => 'IPA', 'kode_mapel' => 'IPA'],
            ['nama_mapel' => 'IPS', 'kode_mapel' => 'IPS'],
            ['nama_mapel' => 'Pendidikan Agama Islam', 'kode_mapel' => 'PAI'],
            ['nama_mapel' => 'PJOK', 'kode_mapel' => 'PJOK'],
        ];

        foreach ($mapelList as $mapel) {
            Mapel::firstOrCreate(['nama_mapel' => $mapel['nama_mapel']], $mapel);
        }
    }
}
