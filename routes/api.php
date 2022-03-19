<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\VerseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('languages', LanguageController::class);
Route::get('/language/{language}', [LanguageController::class, 'language']);

Route::apiResource('versions', VersionController::class);
Route::get('/version/{abbreviation}', [VersionController::class, 'versionByAbbreviation']);
Route::get('/versions/language/{language}', [VersionController::class, 'versionByLanguage']);

Route::apiResource('books', BookController::class);
Route::get('/books/language/{language}', [BookController::class, 'booksByLanguage']);
Route::get('/books/testament/{testament}', [BookController::class, 'testament']);
Route::get('/books/testament/{testament}/language/{language}', [BookController::class, 'testamentLanguage']);

Route::get('/verses/language/{language}/version/{version}/bookabbreviationurl/{book_abreviation_url}/chapter/{chapter}', [VerseController::class, 'versesByLanguageAbbreviationUrlChpater']);
Route::get('/verses/language/{language}/version/{version}/bookabbreviationurl/{book_abreviation_url}/chapter/{chapter}/verse/{verse}', [VerseController::class, 'versesByLanguageAbbreviationUrlChpaterVerse']);
Route::get('/verses/language/{language}/version/{version}/bookabbreviationurl/{book_abreviation_url}/chapter/{chapter}/verse/{verse}/compost_verse/{compost_verse}', [VerseController::class, 'versesByLanguageAbbreviationUrlChpaterCompostVerse']);
