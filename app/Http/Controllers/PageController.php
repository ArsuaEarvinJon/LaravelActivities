<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\resources\views;

class PageController extends Controller
{
    public function post(){
        $name = 'earvin';
        $age = 21;
        $artists = array('ariana grande', 'hunter hayes', 'troye sivan', 'taylor swift');
        return view('post', compact('name', 'age', 'artists'));
    }

    public function index(){
        $arr = array(10,23,4,56,23,44,1);
        return view('index', compact('arr'));
    }
}
