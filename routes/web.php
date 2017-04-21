<?php

Route::any('Api/',"Api@index");
Route::any('Api/Add/{rss}/{name}/{frequency}/{date?}/{type?}',"Api@add")->where([
    "frequency" => "[0-9]+",
    "type" => "[0-9]"
]);

Route::get('/', function () {
    return view('welcome');
});