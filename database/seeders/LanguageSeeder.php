<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = array(
            0 => array(
                'language' => 'portuguese',
                'encode' => 'utf-8',
                'country' => 'Brasil'
            )
        );

        foreach ($languages as $data) {
            DB::table('languages')->insert(
                $data
            );
        }
    }
}
