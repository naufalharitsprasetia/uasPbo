<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Progress;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    //
    public function  index()
    {
        return view('interface.papan-skor.index', [
            'title' => 'Papan Skor',
            'active' => 'papan-skor',
            'progress' => Progress::all()
        ]);
    }
    public function add(Request $request)
    {
        //
        $validatedData = $request->validate([
            'exp' => 'required',
            'user_id' => 'required',
            'materi_id' => 'required',
        ]);
        Progress::create($validatedData);

        return redirect('/papan-skor')->with('success', 'Selamat !! EXP Anda Bertambah 10');
    }
}