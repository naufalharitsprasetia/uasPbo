<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Latihan;
use Illuminate\Http\Request;

class PanelJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface.panel.create-jawaban', [
            'title' => 'Create Jawaban',
            'active' => 'panel',
            'latihan' => Latihan::find($_GET['latihan_id'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'jawaban' => 'required|max:255',
            'is_true' => 'required',
            'latihan_id' => 'required',
        ]);
        Jawaban::create($validatedData);

        return redirect('/create-latihan/' . $request->input('latihan_id'))->with('success', 'Jawaban has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
        return view('interface.panel.edit-jawaban', [
            'title' => 'Create Jawaban',
            'active' => 'panel',
            'jawaban' => $jawaban
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
        $validatedData = $request->validate([
            'jawaban' => 'required|max:255',
            'is_true' => 'required',
            'latihan_id' => 'required',
        ]);
        Jawaban::where('id', $jawaban->id)->update($validatedData);

        return redirect('/create-latihan/' . $request->input('latihan_id'))->with('success', 'Jawaban has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}