<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagementSeeder extends Seeder
{
    public $data = [
        [
            'Maciej Zwiernik', 
            'Prezes Zarządu',
            null,
            null,
            null
        ],
        [
            'Tomasz Bąkowski', 
            'Wiceprezes - Naczelnik',
            '+48 693 555 859',
            'https://www.facebook.com/tomasz.bakowski.393',
            'img/avatars/tomek.jpg'
        ],
        [
            'Jerzy Dziliński', 
            'II Wiceprezes',
            null,
            null,
            null
        ],
        [
            'Artur Dota', 
            'Zastępca Naczelnika',
            null,
            null,
            null
        ],
        [
            'Barbara Bąkowska', 
            'Sekretarz',
            '+48 667 832 345',
            'https://www.facebook.com/basia.bakowska.9',
            'img/avatars/basia.jpg'
        ],
        [
            'Paweł Borczyk', 
            'Skarbnik',
            null,
            null,
            null
        ],
        [
            'Piotr Szczepaniak', 
            'Gospodarz',
            null,
            null,
            null
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imgPath = 'img/avatars/man.png';
        for ($i=0; $i < count($this->data); $i++) {
            if($this->data[$i][4]) 
            {
                $imgPath = $this->data[$i][4];
            }
            DB::table('management')->insert([
                'name' => $this->data[$i][0],
                'position' => $this->data[$i][1],
                'phone' => $this->data[$i][2],
                'socialFacebook' => $this->data[$i][3],
                'profilePhotoPath' => $imgPath,
                'order' => $i+1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            $imgPath = 'img/avatars/man.png';
        }
    }
}