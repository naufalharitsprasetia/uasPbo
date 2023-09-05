<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    //
    public function store(Request $request)
    {
        echo $request->input('body');
        // return;
    }
}