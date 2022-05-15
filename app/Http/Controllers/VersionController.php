<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data         = DB::table('versions')->select('abbreviation', 'version', 'language', 'language_format', 'country')->get();
        $header_footer  = $this->getHeaderFooter();
        $result         = array(
                            'header_footer' => $header_footer,
                            'data'          => $data
                        );
        return response()->json($result, 200);
    }

    /**
     * Get a especific version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $lang
     * @return \Illuminate\Http\Response
     */
    public function versionByAbbreviation(Request $request, $abbreviation = '')
    {
        
        if ($abbreviation == '') {
            return response()->json(
                ['message' => 'You not set version. Please try /versions']
            , 404);
        }
        
        if (!DB::table('versions')->where('abbreviation', '=', $abbreviation)->exists()) {
            
            return response()->json(
                ['message' => 'Don\'t have this version. Please try /versions']
            , 404);
        }
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('versions')->select('abbreviation', 'version', 'language', 'language_format', 'country')->where('abbreviation', '=', $abbreviation)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $lang
     * @return \Illuminate\Http\Response
     */
    public function versionByLanguage(Request $request, $language = '')
    {
  
        if ($language == '') {
            return response()->json([
                'message' => 'You not set language. Please try /languages or /versions']
            , 404);
        }
           
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('versions')->select('abbreviation', 'version', 'language', 'language_format', 'country')->where('language', '=', $language)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $lang
     * @return \Illuminate\Http\Response
     */
    public function getHeaderFooter() {
        
        $lang = DB::table('languages')->select('language', 'encode', 'country')->get();
        $books = DB::table('books')->select('book', 'abbreviation', 'abbreviation_url', 'chapters', 'testament', 'summary')->get();
        $result = array(
            'header' => array(
                'lang' => $lang,
            ),
            'footer' => array(
                'books' => $books
            )
        );

        return $result;
    }
}
