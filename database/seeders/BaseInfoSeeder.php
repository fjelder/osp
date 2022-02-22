<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('base_infos')->insert([
            'name' => 'Ochotnicza Straż Pożarna w Robakowie',
            'nip' => '7773367953',
            'regon' => '300951750',
            'krs' => '0000266422',
            'number' => '+48 698 542 156',
            'email' => 'kontakt@osprobakowo.pl',
            'address' => 'ul. Wiejska 9, 62-023 Robakowo',
            'linkMaps' => 'https://goo.gl/maps/WXKLSCLZqF3Gmqdd7',
            'linkFacebook' => 'https://www.facebook.com/Ochotnicza-Straż-Pożarna-w-Robakowie-508009266665390/',
            'linkYoutube' => '',
            'created_at' => now(),
            'updated_at' => now()
            ]);
    }
}