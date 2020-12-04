<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('docs/{file?}', function ($file = null) {
    $text = (new App\Documentation)->get($file);

    return app(Parsedown::class)->text($text);
    
});
