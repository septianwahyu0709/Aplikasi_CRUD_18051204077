<?php

namespace App\Database\Seeds;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'nim'     => '18051204077',
            'nama'   => 'Septian',
            'angkatan' => '2018'
        ];
        $data2 = [
            'nim'     => '180512040100',
            'nama'   => 'wahyu',
            'angkatan' => '2018'
        ];
        $this->db->table('mahasiswa')->insert($data1);
        $this->db->table('mahasiswa')->insert($data2);
    }
}
