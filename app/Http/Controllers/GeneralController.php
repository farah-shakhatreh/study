<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function para($id)
    {
       // return 'moaz';
        return view('test',compact('id'));
    }
}
