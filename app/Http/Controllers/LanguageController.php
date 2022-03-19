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
        $data = DB::table('languages')->select('language', 'encode', 'country')->get();
        return response()->json($data, 200);
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
        $data = DB::table('languages')->select('language', 'encode', 'country')->where('language', '=', $language)->get();
        if (count($data) == 0) {

            return response()->json(
                ['message' => 'Doesn\'t have this language. Please try /languages!'], 
            404);
        }
        return response()->json($data, 200);
    }
}
