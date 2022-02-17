<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagementSeeder extends Seeder
{
    public $data = [
        [
            'Maciej Zwiernik', 
            'Prezes Zarządu'
        ],
        [
            'Tomasz Bąkowski', 
            'Wiceprezes - Naczelnik'
        ],
        [
            'Jerzy Dziliński', 
            'II Wiceprezes'
        ],
        [
            'Artur Dota', 
            'Zastępca Naczelnika'
        ],
        [
            'Barbara Bąkowska', 
            'Sekretarz'
        ],
        [
            'Paweł Borczyk', 
            'Skarbnik'
        ],
        [
            'Piotr Szczepaniak', 
            'Gospodarz'
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < count($this->data); $i++) { 
            DB::table('management')->insert([
                'name' => $this->data[$i][0],
                'position' => $this->data[$i][1],
                'profilePhotoPath' => 'img/avatars/man.png',
                'order' => $i+1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}