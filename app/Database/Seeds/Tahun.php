<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tahun extends Seeder
{
    public function run()
    {
        // membuat data
        $datas = [
            [
                'tahun' => '2019'
            ],
            [
                'tahun' => '2020'
            ],
            [
                'tahun' => '2021'
            ],
            [
                'tahun' => '2021'
            ],

        ];

        foreach ($datas as $data) {
            // insert semua data ke tabel
            $this->db->table('tahun')->insert($data);
        }
    }
}
