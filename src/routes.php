<?php

use Illuminate\Support\Facades\Route;

Route::get('form_major', function (){
    return "hello first loaded my package";
})->name('form_major');

Route::get('form_major/add/{a}/{b}', 'enormous\form_major\FormMajorController@add');
Route::get('form_major/subtract/{a}/{b}', 'enormous\form_major\FormMajorController@subtract');
