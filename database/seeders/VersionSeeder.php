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
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'acf' => array(
                'abbreviation'      => 'acf',
                'version'           => 'Almeida Corrigida Fiel',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'ara' => array(
                'abbreviation'      => 'ara',
                'version'           => 'Almeida Revista e Atualizada',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'arc' => array(
                'abbreviation'      => 'arc',
                'version'           => 'Almeida Revista e Corrigida',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'naa' => array(
                'abbreviation'      => 'naa',
                'version'           => 'Nova Almeida Atualizada',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'nvi' => array(
                'abbreviation'      => 'nvi',
                'version'           => 'Nova Versão Internacional',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'nvt' => array(
                'abbreviation'      => 'nvt',
                'version'           => 'Nova Versão Transformada',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'ol' => array(
                'abbreviation'      => 'ol',
                'version'           => 'O Livro',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'rc69' => array(
                'abbreviation'      => 'rc69',
                'version'           => 'Almeida Revista e Corrigida 1969',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'tb' => array(
                'abbreviation'      => 'tb',
                'version'           => 'Sociedade Bíblica Britânica',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
            'vc' => array(
                'abbreviation'      => 'vc',
                'version'           => 'Versão Católica',
                'language'          => 'português',
                'language_format'   => 'utf8',
                'country'           => 'Brasil'
            ),
        );
        
        foreach ($versions as $abbr => $data) {
            
            DB::table('versions')->insert(
                $data
            );
        }
    }
}
