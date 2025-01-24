<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\Kuisioner2;
use App\Models\PostTestKuisioner;
use App\Models\PostTestKuisioner2;

class AdminController extends Controller
{
    public function index()
    {
        // Jalankan query SQL
        $results = DB::select("
            SELECT
                result_method_k_b_s.id,
                result_method_k_b_s.nama_akseptor,
                result_method_k_b_s.nama_suami,
                result_method_k_b_s.pendidikan_terakhir,
                result_method_k_b_s.tujuan_kb,
                result_method_k_b_s.no_hp,
                result_method_k_b_s.section,
                result_method_k_b_s.alamat,
                result_method_k_b_s.pregnancy_status,
                result_method_k_b_s.age_category,
                GROUP_CONCAT(DISTINCT medical_histories.name_history) AS medical_history,
                GROUP_CONCAT(DISTINCT recommended_methods.name_recommended) AS recommended_methods,
                result_method_k_b_s.created_at,
                result_method_k_b_s.updated_at
            FROM result_method_k_b_s
            JOIN medical_histories ON medical_histories.result_method_kb_id = result_method_k_b_s.id
            JOIN recommended_methods ON recommended_methods.result_method_kb_id = result_method_k_b_s.id
            GROUP BY
                result_method_k_b_s.id,
                result_method_k_b_s.nama_akseptor,
                result_method_k_b_s.nama_suami,
                result_method_k_b_s.pendidikan_terakhir,
                result_method_k_b_s.tujuan_kb,
                result_method_k_b_s.no_hp,
                result_method_k_b_s.alamat,
                result_method_k_b_s.pregnancy_status,
                result_method_k_b_s.age_category,
                result_method_k_b_s.created_at,
                result_method_k_b_s.updated_at
        ");


        $resultsChart = DB::select("
        SELECT
            result_method_k_b_s.id,
            result_method_k_b_s.nama_akseptor,
            result_method_k_b_s.nama_suami,
            result_method_k_b_s.pendidikan_terakhir,
            result_method_k_b_s.tujuan_kb,
            result_method_k_b_s.no_hp,
            result_method_k_b_s.alamat,
            result_method_k_b_s.section,
            result_method_k_b_s.pregnancy_status,
            result_method_k_b_s.age_category,
            GROUP_CONCAT(DISTINCT medical_histories.name_history) AS medical_history,
            GROUP_CONCAT(DISTINCT recommended_methods.name_recommended) AS recommended_methods,
            result_method_k_b_s.created_at,
            result_method_k_b_s.updated_at
        FROM result_method_k_b_s
        JOIN medical_histories ON medical_histories.result_method_kb_id = result_method_k_b_s.id
        JOIN recommended_methods ON recommended_methods.result_method_kb_id = result_method_k_b_s.id
        GROUP BY
            result_method_k_b_s.id,
            result_method_k_b_s.nama_akseptor,
            result_method_k_b_s.nama_suami,
            result_method_k_b_s.pendidikan_terakhir,
            result_method_k_b_s.tujuan_kb,
            result_method_k_b_s.no_hp,
            result_method_k_b_s.alamat,
            result_method_k_b_s.pregnancy_status,
            result_method_k_b_s.age_category,
            result_method_k_b_s.created_at,
            result_method_k_b_s.updated_at
    ");

        // Ambil data kuisioner sebagai tambahan jika dibutuhkan
        $kuisioners = Kuisioner::all();
        $postTestKuisioners = PostTestKuisioner::all();

        $kuisioners2 = Kuisioner2::all();
        $postTestKuisioners2 = PostTestKuisioner2::all();



        // chart
         // Kelompokkan data berdasarkan section
            $sectionData = collect($results)->groupBy('section')->map->count();

            // Kelompokkan data berdasarkan pregnancy_status
            $pregnancyData = collect($results)->groupBy('pregnancy_status')->map->count();

            // Kelompokkan data berdasarkan age_category
            $ageCategoryData = collect($results)->groupBy('age_category')->map->count();

            // Kelompokkan data rekomendasi KB berdasarkan tahun
            $recommendedDataByYear = collect($results)->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->created_at)->year;
            })->map(function ($group) {
                return $group->flatMap(function ($item) {
                    return explode(',', $item->recommended_methods);
                })->countBy();
            });
        // Return view dengan data
        return view('layouts.admin.home-admin', [
            'results' => $results,
            'kuisioners' => $kuisioners,
            'kuisioners2' => $kuisioners2,
            'postTestKuisioners2' => $postTestKuisioners2,
            'postTestKuisioners' => $postTestKuisioners,

            // chart
            'sectionData' => $sectionData,
            'pregnancyData' => $pregnancyData,
            'ageCategoryData' => $ageCategoryData,
            'recommendedDataByYear' => $recommendedDataByYear
        ]);
    }
}
