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
        $maxDistance = 5; // km

        // Subquery menggunakan rumus Haversine
        $sub = DB::table('kekuatan_sinyal')
            ->selectRaw('*, (
                6371 * 2 * ASIN(SQRT(
                    POWER(SIN(RADIANS(latitude - ?)/2), 2) +
                    COS(RADIANS(?)) * COS(RADIANS(latitude)) *
                    POWER(SIN(RADIANS(longitude - ?)/2), 2)
                ))
            ) AS distance', [$lat, $lat, $lng])
            ->orderBy('distance')
            ->limit(5);

        $nearestStrongest = DB::table(DB::raw("({$sub->toSql()}) as sub"))
            ->mergeBindings($sub)
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

