<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Materi;
use Illuminate\Http\Request;

class PanelMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface.panel.create-materi', [
            'title' => 'Create Materi',
            'active' => 'panel',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('interface.panel.create-materi', [
            'title' => 'Create Materi',
            'active' => 'panel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:materis',
            'contoh_gambar' => 'image|file|max:5120',
            'category_id' => 'required',
            'desc' => 'required|max:500',
            'body' => 'required',
            'contoh_suara' => 'file|nullable',
            'text_suara' => 'nullable|max|100',
            'link_video' => 'nullable|max:500'
        ]);

        if ($request->file('contoh_gambar')) {
            $validatedData['contoh_gambar'] = $request->file('contoh_gambar')->store('post-images');
        }

        Materi::create($validatedData);

        return redirect('/panel')->with('success', 'Materi baru telah ditambahkan !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        //
        return view('interface.panel.edit-materi', [
            'materi' => $materi,
            'active' => 'panel',
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        //
        $rules = [
            'judul' => 'required|max:255',
            'contoh_gambar' => 'image|file|max:5120',
            'category_id' => 'required',
            'desc' => 'required|max:500',
            'body' => 'required',
            'contoh_suara' => 'file|nullable',
            'text_suara' => 'nullable|max|100',
            'link_video' => 'nullable|max:500'
        ];

        if ($request->slug != $materi->slug) {
            $rules['slug'] = 'required|unique:materis';
        }

        $validatedData = $request->validate($rules);

        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        Materi::where('id', $materi->id)->update($validatedData);

        return redirect('/panel')->with('success', 'Materi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
