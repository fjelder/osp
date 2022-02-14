<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 25; $i++) { 
            DB::table('faqs')->insert([
                'question' => 'Pytanie nr '.($i+1),
                'answear' => 'Odpowiedź nr '.($i+1),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}