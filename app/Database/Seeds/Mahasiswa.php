<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            ['npm' => '2017051001',
                'nama'    => 'Ervan Chodry',
                'alamat' => 'sidomulyo',
                'created_at' => Time::now()], 
            ['npm' => '2017051061',
                'nama'    => 'Muhammad Daffa',
                'alamat' => 'langkapura',
                'created_at' => Time::now()]
        ];

        // Simple Queries
     //   $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
        
    }
}
