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

        $abbver = DB::table('versions')->select('abbreviation', 'version')->get();
        return response()->json($abbver, 200);
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
        
        $data = DB::table('versions')->select('abbreviation', 'version')->where('abbreviation', '=', $abbreviation)->get();
        return response()->json($data, 200);
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
        
        //VERIFY LANGUAGE EXIST
        if (!DB::table('languages')->where('language', '=', $language)->exists()) {

            return response()->json(
                ['message' => 'Don\'t have version for this language. Please try /languages or /versions']
            , 404);
        }
        
        $language = DB::table('languages')->select('id', 'language', 'encode', 'country')->where('language', '=', $language)->first();
        $id_lang = $language->id;
        if (!DB::table('versions')->where('id_lang', '=', $id_lang)->exists()) {

            return response()->json(
                ['message' => 'Don\'t have version for this language. Please try /languages or /versions']
            , 404);
        }
        $data = DB::table('versions')->select('abbreviation', 'version')->where('id_lang', '=', $id_lang)->get();
       
        return response()->json($data, 200);
    }
}
