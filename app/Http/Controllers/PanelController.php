<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Latihan;
use App\Models\Materi;

class PanelController extends Controller
{
    //
    public function index()
    {
        //
        return view('interface.panel.index', [
            'title' => 'Panel',
            'active' => 'panel',
            'categories' => Category::all(),
            'materis' => Materi::all(),
            'latihans' => Latihan::all()
        ]);
    }
}
