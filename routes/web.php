<?php

Route::any('Api/',"Api@index");

Route::get('/', function () {
    return view('welcome');
});