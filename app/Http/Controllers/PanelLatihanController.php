<?php

namespace App\Http\Controllers;

use App\Models\JenisPertanyaan;
use App\Models\Latihan;
use App\Models\Materi;
use Illuminate\Http\Request;

class PanelLatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface.panel.create-latihan', [
            'title' => 'Create Latihan',
            'active' => 'panel',
            'materis' => Materi::all(),
            'jenis_pertanyaan' => JenisPertanyaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view('interface.panel.create-latihan', [
        //     'title' => 'Create Latihan',
        //     'active' => 'panel'
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'pertanyaan' => 'required|max:255',
            'materi_id' => 'required',
            'jenis_pertanyaan_id' => 'required'
        ]);

        Latihan::create($validatedData);
        return redirect('/panel')->with('success', 'Latihan has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Latihan $latihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Latihan $latihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Latihan $latihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Latihan $latihan)
    {
        //
    }
}
