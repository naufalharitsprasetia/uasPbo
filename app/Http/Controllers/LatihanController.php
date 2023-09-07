<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use App\Http\Requests\StoreLatihanRequest;
use App\Http\Requests\UpdateLatihanRequest;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface.latihan.index', [
            'title' => 'Latihan',
            'active' => 'latihan',
            'latihans' => Latihan::paginate(1)->withQueryString()
        ]);
    }
}
