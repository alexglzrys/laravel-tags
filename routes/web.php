<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'BookController@index')->name('books.index');
Route::post('/', 'BookController@store')->name('books.store');

use App\Book;
use Conner\Tagging\Model\Tag;
Route::get('/ejemplo-tagging', function() {
    /*
    Book::create([
        'name' => 'Programación con PHP 5',
        'description' => 'Descripción del libro Programación con PHP 5'
    ]);
    Book::create([
        'name' => 'Descubriendo el Framework Laravel',
        'description' => 'Aprende a desarrollar sitios web profesionales con laravel'
    ]);
    Book::create([
        'name' => 'Bases de Datos con MySQL',
        'description' => 'Domine las bases de datos relacionales desde cero'
    ]);

    dd('Creación de libros correcta');
    */
    
    /*
    $libroPhp = Book::find(1);
    $libroPhp->tag(['php', 'html', 'mysql', 'css']);

    $libroLaravel = Book::find(2);
    $libroLaravel->tag(['laravel', 'php']);

    $libroMysql = Book::find(3);
    $libroMysql->tag(['mysql', 'sql']);

    dd('Asignación de etiquetas correcta');
    */

    // $libroLaravel = Book::find(2);
    // dd($libroLaravel);
    // dd('Etiquetas asignadas a libro Laravel', $libroLaravel->tags);

    // Marcar una etqueta como sugerida o importante
    /*$laravel = Tag::find(5);
    $laravel->suggest = true;
    $laravel->save();
    dd($laravel);

    $php = Tag::where('slug', 'php')->first();
    $php->suggest = true;
    $php->save();

    $tagsSugeridos = Tag::suggested()->get();
    dd($tagsSugeridos);
    */


    // Eliminar una etiqueta asignada a un Modelo
    // $php = Book::find(1);
    // $php->untag('css');
    // dd($php->tags);

    // Eliminar todas las etiquetas asignadas a un Modelo
    // $mysql = Book::find(3);
    // $mysql->untag();
    // dd($mysql->tags);

    // Clasificar etiquetas por Grupos
    // php artisan tagging:create-group MyTagGroup
    /*$php = Tag::find(1);
    $laravel = Tag::find(5);
    $php->setGroup('Backend');
    $laravel->setGroup('Backend');

    $html = Tag::find(2);
    $css = Tag::find(4);
    $html->setGroup('Frontend');
    $css->setGroup('Frontend');


    $mysql = Tag::find(3);
    $sql = Tag::find(6);
    $mysql->setGroup('Database');
    $sql->setGroup('Database');*/

});
