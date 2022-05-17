<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //obtém arquivos da pasta /storage/app/public/versions_bible
        $path_versions = getenv('APP_STORAGE') . "/storage/app/public/versions_bible/";
        foreach (glob($path_versions . '*.json')  as $file) {
            
            //GET ID VERSION
            $basename           = basename($file);
            $langu_count_veri   = explode('_', $basename);
            $version_exte       = explode('.', $langu_count_veri[2]);
            $language           = $langu_count_veri[0];
            if ($language == 'portugues') {

                $language = 'portuguese';
            }
            
            $versabr            = $version_exte[0];
            $resverseab         = DB::table('versions')->select('id')->where('abbreviation', '=', $versabr)->first();
            $id_version         = $resverseab->id;
            $version            = json_decode(file_get_contents($file));

            //GET DATA AND SAVE ON THE DATA BASE THE VERSES
            //OLD TESTAMENT
            foreach ($version->Velho_Testamento as $book) {

                $abr                = $book->abr;
                $bookidab           = DB::table('books')->select('id')->where('abbreviation', '=', $abr)->where('testament', '=', 'old')->first();
                $id_books           = $bookidab->id;
                foreach ($book->capitulos as $chapnum => $chapter) {

                    //GET THE CHPTER NUMBER
                    $chapnum = $chapnum + 1;
                    foreach ($chapter as $vernum => $verse) {

                        //GET THE VERSE
                        $num        = $verse->num;
                        $content    = $verse->content;
                        $data['id_version'] = $id_version;
                        $data['id_book']    = $id_books;
                        $data['chapter']    = $chapnum;
                        $data['num']        = $num;
                        $data['content']    = $content;
                        DB::table('verses')->insert(
                            $data
                        );
                        unset($data);
                    }
                }
            }
            
            //NEW TESTAMENT
            foreach ($version->Novo_Testamento as $book) {

                $abr                = $book->abr;
                if ($abr == 'atos') {
                    $abr = 'at';
                }
                $bookidab           = DB::table('books')->select('id')->where('abbreviation', '=', $abr)->where('testament', '=', 'new')->first();
                $id_books           = $bookidab->id;
                foreach ($book->capitulos as $chapnum => $chapter) {

                    //GET THE CHPTER NUMBER
                    $chapnum = $chapnum + 1;
                    foreach ($chapter as $vernum => $verse) {

                        //GET THE VERSE
                        $num        = $verse->num;
                        $content    = $verse->content;
                        $data['id_version'] = $id_version;
                        $data['id_book']    = $id_books;
                        $data['chapter']    = $chapnum;
                        $data['num']        = $num;
                        $data['content']    = $content;
                        DB::table('verses')->insert(
                            $data
                        );
                        unset($data);
                    }
                }
            }
        }
    }
}
