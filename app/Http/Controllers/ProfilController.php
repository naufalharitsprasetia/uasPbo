<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        return view('interface.profil.index', [
            'title' => 'Profil',
            'active' => 'profil',
        ]);
    }
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'nullable|min:5|max:255'
        ];

        if ($request->input('username') != auth()->user()->username) {
            $rules['username'] = ['required', 'min:3', 'max:255', 'unique:users'];
        }

        $validatedData = $request->validate($rules);

        if ($request->input('password') != null) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            $validatedData['password'] = auth()->user()->password;
        }
        // dd($validatedData);

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/profil')->with('success', 'Profil Has Been Updated!');
    }
}
