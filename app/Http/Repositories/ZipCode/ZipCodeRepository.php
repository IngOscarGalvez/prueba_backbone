<?php

namespace App\Http\Repositories\ZipCode;

use App\Models\ZipCode;
use Illuminate\Http\JsonResponse;

class ZipCodeRepository {

    /**
     * zipCode
     *
     * @param integer $zipCode
     * @return JsonResponse
     */
    public function zipCode(int $zipCode) : JsonResponse
    {
        $zipCode = ZipCode::where('zip_code', $zipCode)->with('federalEntity','settlements','settlements.settlementType', 'municipality')->first();

        if(!$zipCode){
            return response()->json(array(
                'message'   => "Código postal no encontrado!"
            ),404);
        }
        return response()->json($zipCode);
    }

}
