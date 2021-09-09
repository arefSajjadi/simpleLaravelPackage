<?php

namespace enormous\form_major;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormMajorController extends Controller
{
    public function add($a, $b){
        $result =  $a + $b;
        return view('form_major::add', compact('result'));
    }

    public function subtract($a, $b){
        $result =  $a * $b;
        return view('form_major::add', compact('result'));
    }
}
