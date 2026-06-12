<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'topbar' => view('components.topbar.topbar')->render(),
        ]);
    }

    public function sectionCard(Request $request)
{
    // Validasi input dari request
    $validatedData = $request->validate([
        'selected_card' => 'required|string|max:255',
    ]);

    // Simpan data ke session
    session(['select_menu' => $validatedData['selected_card']]);

    // Berikan respon (opsional)
    return response()->json(['message' => 'Data berhasil disimpan ke session.']);
}


public function saveFormData(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_akseptor' => 'required|string|max:255',
            'nama_suami' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'tujuan_kb' => 'required|string|max:255',
            'no_hp' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required|string|max:255',
        ]);

        // Simpan data ke session
        session(['data_diri' => $validatedData]);

        // Redirect ke halaman berikutnya dengan flash message
        return redirect()->route('menu')->with('success', 'Data berhasil dimasukkan!');
    }



}
