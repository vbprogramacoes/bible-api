<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerseController extends Controller
{
    /**
     * Get verses by language, version abbreviation, book abbreviation url and chapter 
     * @param request
     * @param language
     * @param version_abbreviation
     * @param book_abbreviation_url
     * @param chapter
     * @return \Illuminate\Http\Response
     */
    public function versesByLanguageAbbreviationUrlChpater(Request $request, $language = '', $version_abbreviation = '', $book_abbreviation_url = '', $chapter = '')
    {
        
        if ($language == '' || $version_abbreviation =='' || $book_abbreviation_url == '' || ($chapter == '' && $chapter > 0)) {
            return response()->json([
                'message' => "You not set language, version, book abbreviation url or chapter."]
            , 404);
        }

        if (!DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->exists()) {
            return response()->json([
                'message' => "This book don't exist. Please try /books!"]
            , 404);
        }
        
        $version        = DB::table('versions')->where('abbreviation', '=', $version_abbreviation)->first();
        $id_version     = $version->id;
        
        $book = DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->first();
        if($book->chapters < $chapter) {

            return response()->json([
                'message' => "This chapter don't exist for this book. Please try /books!"]
            , 404);
        }

        $id_book = $book->id;
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('verses')->select('num', 'content')->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }
    
    /**
     * Get verses by language, version abbreviation, book abbreviation url and chapter 
     * @param request
     * @param language
     * @param version_abbreviation
     * @param book_abbreviation_url
     * @param chapter
     * @param verse
     * @return \Illuminate\Http\Response
     */
    public function versesByLanguageAbbreviationUrlChpaterVerse(Request $request, $language = '', $version_abbreviation = '', $book_abbreviation_url = '', $chapter = '', $verse = '')
    {

        if ($language == '' || $version_abbreviation =='' || $book_abbreviation_url == '' || ($chapter == '' && $chapter > 0) || ($verse == '' && $verse > 0)) {
            return response()->json([
                'message' => "You not set language, version, book abbreviation url or chapter."]
            , 404);
        }
        
        if (!DB::table('versions')->where('language', '=', $language)->where('abbreviation', '=', $version_abbreviation)->exists()) {
            return response()->json([
                'message' => "This version don't exist. Please try /versions!"]
            , 404);
        }

        if (!DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->exists()) {
            return response()->json([
                'message' => "Thys book don't exist. Please try /books!"]
            , 404);
        }
        
        $version        = DB::table('versions')->where('abbreviation', '=', $version_abbreviation)->first();
        $id_version     = $version->id;
        
        $book = DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->first();
        if($book->chapters < $chapter) {
            return response()->json([
                'message' => "This chapter don't exist for this book. Please try /books!"]
            , 404);
        }

        $id_book = $book->id;
        if(!DB::table('verses')->select('num', 'content')->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->where('num', '=', $verse)->exists()) {
            return response()->json([
                'message' => "This verse don't exist for this book. Please try /books!"]
            , 404);
        }

        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('verses')->select('num', 'content')->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->where('num', '=', $verse)->get();
        $result         = array(
            'header_footer' => $header_footer,
            'data'          => $data
        );
        return response()->json($result, 200);
    }

    /**
     * Get verses by language, version abbreviation, book abbreviation url and chapter 
     * @param request
     * @param language
     * @param version_abbreviation
     * @param book_abbreviation_url
     * @param chapter
     * @param verse
     * @param compost_verse
     * @return \Illuminate\Http\Response
     */
    public function versesByLanguageAbbreviationUrlChpaterCompostVerse(Request $request, $language = '', $version_abbreviation = '', $book_abbreviation_url = '', $chapter = '', $verse = '', $compost_verse = '')
    {
        
        if ($language == '' || $version_abbreviation =='' || $book_abbreviation_url == '' || ($chapter == '' && $chapter > 0) || ($verse == '' && $verse > 0) || ($compost_verse == '' && $compost_verse > 0)) {
            return response()->json([
                'message' => "You not set language, version, book abbreviation url, chapter verse or compost verse."]
            , 404);
        }

        if (!DB::table('languages')->where('language', '=', $language)->exists()) {
            return response()->json([
                'message' => "This language don't exist. Please try /languages!"]
            , 404);
        }

        $lang       = DB::table('languages')->where('language', '=', $language)->first();
        $id_lang    = $lang->id;
        if (!DB::table('versions')->where('id_lang', '=', $id_lang)->where('abbreviation', '=', $version_abbreviation)->exists()) {
            return response()->json([
                'message' => "This version don't exist. Please try /versions!"]
            , 404);
        }

        if (!DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->where('id_lang', '=', $id_lang)->exists()) {
            return response()->json([
                'message' => "Thys book don't exist. Please try /books!"]
            , 404);
        }
        
        $version        = DB::table('versions')->where('abbreviation', '=', $version_abbreviation)->first();
        $id_version     = $version->id;
        
        $book = DB::table('books')->where('abbreviation_url', '=', $book_abbreviation_url)->first();
        if($book->chapters < $chapter) {
            return response()->json([
                'message' => "This chapter don't exist for this book. Please try /books!"]
            , 404);
        }

        $id_book = $book->id;
        if(!DB::table('verses')->select('num', 'content')->where('id_lang', '=', $id_lang)->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->where('num', '=', $verse)->exists()) {
            return response()->json([
                'message' => "This verse don't exist for this book. Please try /books!"]
            , 404);
        }

        if(!DB::table('verses')->select('num', 'content')->where('id_lang', '=', $id_lang)->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->where('num', '=', $compost_verse)->exists()) {
            return response()->json([
                'message' => "This verse don't exist for this book. Please try /books!"]
            , 404);
        }
        if ($verse > $compost_verse) {
            return response()->json([
                'message' => "This verse is bigger than compost verse. Try with the shorter verse!"]
            , 404);
        }
       
        $header_footer  = $this->getHeaderFooter();
        $data = DB::table('verses')->select('num', 'content')->where('id_lang', '=', $id_lang)->where('id_version', '=', $id_version)->where('id_book', '=', $id_book)->where('chapter', '=', $chapter)->where('num', '>=', $verse)->where('num', '<=', $compost_verse)->get();
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
