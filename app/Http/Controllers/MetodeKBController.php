<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultMethodKB as FormData;
use App\Models\MedicalHistory;
use App\Models\RecommendedMethod;

class MetodeKBController extends Controller
{
    public function index()
    {
        if (!session()->has('data_diri')) {
            return redirect()->route('home'); // Jika tidak ada, redirect ke halaman home
        }

        return view('layouts.select-kb-method.kb-method', [
            'menu' => view('layouts.select-kb-method.kb-method')->render(),
        ]);
    }

    public function ChangeMethod()
    {
        if (!session()->has('data_diri')) {
            return redirect()->route('home'); // Jika tidak ada, redirect ke halaman home
        }

        return view('layouts.change-method.change-kb-method', [
            'menu' => view('layouts.change-method.change-kb-method')->render(),
        ]);
    }

    public function postAbortion()
    {
        if (!session()->has('data_diri')) {
            return redirect()->route('home'); // Jika tidak ada, redirect ke halaman home
        }

        return view('layouts.post-abortion.post-abortion', [
            'menu' => view('layouts.post-abortion.post-abortion')->render(),
        ]);
    }

    public function postPartum()
    {
        if (!session()->has('data_diri')) {
            return redirect()->route('home'); // Jika tidak ada, redirect ke halaman home
        }

        return view('layouts.post-partum.post-partum', [
            'menu' => view('layouts.post-partum.post-partum')->render(),
        ]);
    }

    public function saveFormData(Request $request)
{
    // Validasi data yang diterima
    $validatedData = $request->validate([
        'ResultMethodKB.nama_akseptor' => 'required|string',
        'ResultMethodKB.nama_suami' => 'required|string',
        'ResultMethodKB.pendidikan_terakhir' => 'required|string',
        'ResultMethodKB.tujuan_kb' => 'required|string',
        'ResultMethodKB.no_hp' => 'required|string',
        'ResultMethodKB.alamat' => 'required|string',
        'ResultMethodKB.pregnancyStatus' => 'required|string',
        'ResultMethodKB.ageCategory' => 'required|string',
        'ResultMethodKB.medicalHistory' => 'required|array',
        'ResultMethodKB.recommendedMethods' => 'required|array',
    ]);

    $selectMenu = session('select_menu');

    // Menyimpan data ResultMethodKB
    $formData = new FormData();
    $formData->nama_akseptor = $validatedData['ResultMethodKB']['nama_akseptor'];
    $formData->nama_suami = $validatedData['ResultMethodKB']['nama_suami'];
    $formData->section = $selectMenu;
    $formData->pendidikan_terakhir = $validatedData['ResultMethodKB']['pendidikan_terakhir'];
    $formData->tujuan_kb = $validatedData['ResultMethodKB']['tujuan_kb'];
    $formData->no_hp = $validatedData['ResultMethodKB']['no_hp'];
    $formData->alamat = $validatedData['ResultMethodKB']['alamat'];
    $formData->pregnancy_status = $validatedData['ResultMethodKB']['pregnancyStatus'];
    $formData->age_category = $validatedData['ResultMethodKB']['ageCategory'];
    $formData->save();

    // Simpan medical history ke dalam MedicalHistory
    foreach ($validatedData['ResultMethodKB']['medicalHistory'] as $history) {
        $medicalHistory = new MedicalHistory();
        $medicalHistory->result_method_kb_id = $formData->id; // Hubungkan dengan ID result_method_kb
        $medicalHistory->name_history = $history['name_history']; // Sesuaikan dengan data yang diterima
        $medicalHistory->save();
    }

    // Simpan recommended methods ke dalam RecommendedMethod
    foreach ($validatedData['ResultMethodKB']['recommendedMethods'] as $method) {
        $recommendedMethod = new RecommendedMethod();
        $recommendedMethod->result_method_kb_id = $formData->id; // Hubungkan dengan ID result_method_kb
        $recommendedMethod->name_recommended = $method['name_reccomended']; // Sesuaikan dengan data yang diterima
        $recommendedMethod->save();
    }

    // Mengembalikan respons sukses
    return response()->json([
        'message' => 'Data berhasil disimpan!',
        'data' => $formData,
    ], 200);
}

}
