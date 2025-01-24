<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner2; // Pastikan kamu membuat model untuk Kuisioner
use App\Models\PostTestKuisioner2; // Pastikan kamu membuat model untuk PostTestKuisioner

class KuisionerController2 extends Controller
{
    public function store(Request $request)
    {
        // Validasi data (opsional, sesuaikan dengan kebutuhan)
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'jumlah_anak' => 'required|integer',
            'kb1' => 'required|string',
            'kb2' => 'required|string',
            'kb3' => 'required|string',
            'kb4' => 'required|string',
            'kb5' => 'required|string',
            'kb6' => 'required|string',
            'kb7' => 'required|string',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'q5' => 'required|string',
            'q6' => 'required|string',
            'action1' => 'required|string',
            'action2' => 'required|string',
            'action3' => 'required|string',
            'action4' => 'required|string',
            'action5' => 'required|string',
            'action6' => 'required|string',
            'action7' => 'required|string',
            'action8' => 'required|string',
            'action9' => 'required|string',
            'action10' => 'required|string',
            'pengetahuan' => 'required|array',
            'pengetahuan.percentage' => 'required|integer',
            'pengetahuan.kategori' => 'required|string',
            'sikap' => 'required|array',
            'sikap.percentage' => 'required|integer',
            'sikap.kategori' => 'required|string',
            'tindakan' => 'required|array',
            'tindakan.percentage' => 'required|integer',
            'tindakan.kategori' => 'required|string',
        ]);

        // Simpan data ke database
        $kuisioner = new Kuisioner2;
        $kuisioner->nama = $validatedData['nama'];
        $kuisioner->usia = $validatedData['usia'];
        $kuisioner->jenis_kelamin = $validatedData['jenis_kelamin'];
        $kuisioner->pendidikan = $validatedData['pendidikan'];
        $kuisioner->pekerjaan = $validatedData['pekerjaan'];
        $kuisioner->jumlah_anak = $validatedData['jumlah_anak'];
        $kuisioner->kb1 = $validatedData['kb1'];
        $kuisioner->kb2 = $validatedData['kb2'];
        $kuisioner->kb3 = $validatedData['kb3'];
        $kuisioner->kb4 = $validatedData['kb4'];
        $kuisioner->kb5 = $validatedData['kb5'];
        $kuisioner->kb6 = $validatedData['kb6'];
        $kuisioner->kb7 = $validatedData['kb7'];
        $kuisioner->q1 = $validatedData['q1'];
        $kuisioner->q2 = $validatedData['q2'];
        $kuisioner->q3 = $validatedData['q3'];
        $kuisioner->q4 = $validatedData['q4'];
        $kuisioner->q5 = $validatedData['q5'];
        $kuisioner->q6 = $validatedData['q6'];
        $kuisioner->action1 = $validatedData['action1'];
        $kuisioner->action2 = $validatedData['action2'];
        $kuisioner->action3 = $validatedData['action3'];
        $kuisioner->action4 = $validatedData['action4'];
        $kuisioner->action5 = $validatedData['action5'];
        $kuisioner->action6 = $validatedData['action6'];
        $kuisioner->action7 = $validatedData['action7'];
        $kuisioner->action8 = $validatedData['action8'];
        $kuisioner->action9 = $validatedData['action9'];
        $kuisioner->action10 = $validatedData['action10'];

        // Menyimpan hasil perhitungan kategori
        $kuisioner->pengetahuan_percentage = $validatedData['pengetahuan']['percentage'];
        $kuisioner->pengetahuan_kategori = $validatedData['pengetahuan']['kategori'];

        $kuisioner->sikap_percentage = $validatedData['sikap']['percentage'];
        $kuisioner->sikap_kategori = $validatedData['sikap']['kategori'];

        $kuisioner->tindakan_percentage = $validatedData['tindakan']['percentage'];
        $kuisioner->tindakan_kategori = $validatedData['tindakan']['kategori'];

        // Simpan data ke database
        $kuisioner->save();

        // Response
        return response()->json([
            'message' => 'Data berhasil disimpan!',
            'data' => $kuisioner
        ], 201);
    }

    public function PostTestStore(Request $request)
    {
        // Validasi data (opsional, sesuaikan dengan kebutuhan)
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'jumlah_anak' => 'required|integer',
            'kb1' => 'required|string',
            'kb2' => 'required|string',
            'kb3' => 'required|string',
            'kb4' => 'required|string',
            'kb5' => 'required|string',
            'kb6' => 'required|string',
            'kb7' => 'required|string',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'q5' => 'required|string',
            'q6' => 'required|string',
            'action1' => 'required|string',
            'action2' => 'required|string',
            'action3' => 'required|string',
            'action4' => 'required|string',
            'action5' => 'required|string',
            'action6' => 'required|string',
            'action7' => 'required|string',
            'action8' => 'required|string',
            'action9' => 'required|string',
            'action10' => 'required|string',
            'pengetahuan' => 'required|array',
            'pengetahuan.percentage' => 'required|integer',
            'pengetahuan.kategori' => 'required|string',
            'sikap' => 'required|array',
            'sikap.percentage' => 'required|integer',
            'sikap.kategori' => 'required|string',
            'tindakan' => 'required|array',
            'tindakan.percentage' => 'required|integer',
            'tindakan.kategori' => 'required|string',
        ]);

        // Simpan data ke database
        $kuisioner = new PostTestKuisioner2;
        $kuisioner->nama = $validatedData['nama'];
        $kuisioner->usia = $validatedData['usia'];
        $kuisioner->jenis_kelamin = $validatedData['jenis_kelamin'];
        $kuisioner->pendidikan = $validatedData['pendidikan'];
        $kuisioner->pekerjaan = $validatedData['pekerjaan'];
        $kuisioner->jumlah_anak = $validatedData['jumlah_anak'];
        $kuisioner->kb1 = $validatedData['kb1'];
        $kuisioner->kb2 = $validatedData['kb2'];
        $kuisioner->kb3 = $validatedData['kb3'];
        $kuisioner->kb4 = $validatedData['kb4'];
        $kuisioner->kb5 = $validatedData['kb5'];
        $kuisioner->kb6 = $validatedData['kb6'];
        $kuisioner->kb7 = $validatedData['kb7'];
        $kuisioner->q1 = $validatedData['q1'];
        $kuisioner->q2 = $validatedData['q2'];
        $kuisioner->q3 = $validatedData['q3'];
        $kuisioner->q4 = $validatedData['q4'];
        $kuisioner->q5 = $validatedData['q5'];
        $kuisioner->q6 = $validatedData['q6'];
        $kuisioner->action1 = $validatedData['action1'];
        $kuisioner->action2 = $validatedData['action2'];
        $kuisioner->action3 = $validatedData['action3'];
        $kuisioner->action4 = $validatedData['action4'];
        $kuisioner->action5 = $validatedData['action5'];
        $kuisioner->action6 = $validatedData['action6'];
        $kuisioner->action7 = $validatedData['action7'];
        $kuisioner->action8 = $validatedData['action8'];
        $kuisioner->action9 = $validatedData['action9'];
        $kuisioner->action10 = $validatedData['action10'];

        // Menyimpan hasil perhitungan kategori
        $kuisioner->pengetahuan_percentage = $validatedData['pengetahuan']['percentage'];
        $kuisioner->pengetahuan_kategori = $validatedData['pengetahuan']['kategori'];

        $kuisioner->sikap_percentage = $validatedData['sikap']['percentage'];
        $kuisioner->sikap_kategori = $validatedData['sikap']['kategori'];

        $kuisioner->tindakan_percentage = $validatedData['tindakan']['percentage'];
        $kuisioner->tindakan_kategori = $validatedData['tindakan']['kategori'];

        // Simpan data ke database
        $kuisioner->save();

        // Response
        return response()->json([
            'message' => 'Data berhasil disimpan!',
            'data' => $kuisioner
        ], 201);
    }
}
