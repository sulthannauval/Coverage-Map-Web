<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinyalController extends Controller
{
    public function nearest(Request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;
        $maxDistance = 5; // km, bisa kamu ubah sesuai cakupan prediksi kamu

        // Subquery: hitung jarak dan ambil 5 titik terdekat
        $sub = DB::table('kekuatan_sinyal')
            ->selectRaw('*, 
            (6371 * acos(
                cos(radians(?)) * cos(radians(latitude)) 
                * cos(radians(longitude) - radians(?)) 
                + sin(radians(?)) * sin(radians(latitude))
            )) AS distance', [$lat, $lng, $lat])
            ->orderBy('distance')
            ->limit(5);

        // Dari 5 terdekat, ambil yang sinyalnya paling kuat
        $nearestStrongest = DB::table(DB::raw("({$sub->toSql()}) as sub"))
            ->mergeBindings($sub) // penting: bawa binding dari subquery
            ->where('distance', '<=', $maxDistance)
            ->orderByDesc('strength')
            ->first();

        if ($nearestStrongest) {
            return response()->json([
                'success' => true,
                'result' => $nearestStrongest
            ]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
