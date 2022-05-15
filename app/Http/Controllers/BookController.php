<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('books')->select('book', 'abbreviation', 'abbreviation_url', 'chapters', 'testament', 'summary')->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }

    /**
     * Get book by Language
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $language
     * @return \Illuminate\Http\Response
     */
    public function booksByLanguage(Request $request, $language = '')
    {
        
        if ($language == '') {
            return response()->json([
                'message' => 'You not set language. Please try /languages or /versions']
            , 404);
        }
        
        //VERIFY LANGUAGE EXIST
        if (!DB::table('languages')->where('language', '=', $language)->exists()) {

            return response()->json(
                ['message' => 'Don\'t have books for this language. Please try /languages or /versions']
            , 404);
        }

        $language = DB::table('languages')->select('id', 'language', 'encode', 'country')->where('language', '=', $language)->first();
        $id_lang = $language->id;
        if (!DB::table('books')->where('id_lang', '=', $id_lang)->exists()) {

            return response()->json(
                ['message' => 'Don\'t have books for this language. Please try /languages or /versions']
            , 404);
        }

        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('books')->select('book', 'abbreviation', 'abbreviation_url', 'chapters', 'testament', 'summary')->where('id_lang', '=', $id_lang)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }

    /**
     * Get Books by Testament
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $test
     * @return \Illuminate\Http\Response
     */
    public function testament(Request $request, $testament = '')
    {
  
        if ($testament == '') {
            return response()->json(
                ['message' => 'You not set testament. Please try /books or /books/Testament']
            , 404);
        }
        if (!DB::table('books')->where('testament', '=', $testament)->exists()) {
            return response()->json(
                ['message' => "Don't have this testament. Please try /books/testament/old or /books/testament/new"]
            , 404);
        }
        
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('books')->select('book', 'abbreviation', 'abbreviation_url', 'chapters', 'summary')->where('testament', '=', $testament)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }

    /**
     * Language get books by lang.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $test
     * @param   $lang
     * @return \Illuminate\Http\Response
     */
    public function testamentLanguage(Request $request, $test = '', $lang = '')
    {
  
        if ($test == '' || $lang == '') {
            return response()->json([
                'message' => 'You not set testament or language. Please try /books'], 404);
        }

        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('books')->select('book', 'abbreviation', 'abbreviation_url', 'chapters', 'language', 'summary')->where('testament', '=', $test)->where('language', '=', $lang)->get();
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
