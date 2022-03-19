<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $versions = array(
            'aa' => array(
                'abbreviation'      => 'aa',
                'version'           => 'Almeida Revisada Imprensa Bíblica',
                'language'          => 'portuguese'
            ),
            'acf' => array(
                'abbreviation'      => 'acf',
                'version'           => 'Almeida Corrigida Fiel',
                'language'          => 'portuguese'
            ),
            'ara' => array(
                'abbreviation'      => 'ara',
                'version'           => 'Almeida Revista e Atualizada',
                'language'          => 'portuguese'
            ),
            'arc' => array(
                'abbreviation'      => 'arc',
                'version'           => 'Almeida Revista e Corrigida',
                'language'          => 'portuguese'
            ),
            'naa' => array(
                'abbreviation'      => 'naa',
                'version'           => 'Nova Almeida Atualizada',
                'language'          => 'portuguese'
            ),
            'nvi' => array(
                'abbreviation'      => 'nvi',
                'version'           => 'Nova Versão Internacional',
                'language'          => 'portuguese'
            ),
            'nvt' => array(
                'abbreviation'      => 'nvt',
                'version'           => 'Nova Versão Transformada',
                'language'          => 'portuguese'
            ),
            'ol' => array(
                'abbreviation'      => 'ol',
                'version'           => 'O Livro',
                'language'          => 'portuguese'
            ),
            'rc69' => array(
                'abbreviation'      => 'rc69',
                'version'           => 'Almeida Revista e Corrigida 1969',
                'language'          => 'portuguese'
            ),
            'tb' => array(
                'abbreviation'      => 'tb',
                'version'           => 'Sociedade Bíblica Britânica',
                'language'          => 'portuguese'
            ),
            'vc' => array(
                'abbreviation'      => 'vc',
                'version'           => 'Versão Católica',
                'language'          => 'portuguese'
            ),
        );
        
        foreach ($versions as $abbr => $data) {
            
            $lang               = DB::table('languages')->select('id')->where('language', '=', $data['language'])->first();
            $data['id_lang']    = $lang->id;
            unset($data['language']);
            DB::table('versions')->insert(
                $data
            );
        }
    }
}
