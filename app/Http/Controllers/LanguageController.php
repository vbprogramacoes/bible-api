<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('versions')->select('language')->groupByRaw('language')->get();
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
     * @param   $language
     * @return \Illuminate\Http\Response
     */
    public function language(Request $request, $language = '')
    {
        if ($language == '') {
            
            return response()->json(
                ['message' => 'You not set language. Please try /languages!'], 
            404);
        }
        $data = DB::table('versions')->select('language')->groupByRaw('language')->get();
        if (count($data) == 0) {

            return response()->json(
                ['message' => 'Doesn\'t have this language. Please try /languages!'], 
            404);
        }
        $header_footer  = $this->getHeaderFooter();
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
        
        $lang = DB::table('versions')->select('language')->groupByRaw('language')->get();
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
