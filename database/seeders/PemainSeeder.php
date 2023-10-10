<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemain')->insert([
            'nama_pemain' => 'Maguire',
            'no_punggung' => '5',
            'posisi' => 'Penyerang',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pemain')->insert([
            'nama_pemain' => 'Fred',
            'no_punggung' => '17',
            'posisi' => 'gelandang',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pemain')->insert([
            'nama_pemain' => 'Onana',
            'no_punggung' => '1',
            'posisi' => 'Penyerang',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
