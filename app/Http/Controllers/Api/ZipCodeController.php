<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ZipCode\ZipCodeRepository;


class ZipCodeController extends Controller
{

    /**
     * @var $zipCodeRepository
     */
    protected $zipCodeRepository;

    /**
     * __construct
     *
     * @param ZipCodeRepository $zipCodeRepository
     */
    public function __construct(ZipCodeRepository $zipCodeRepository) {
        $this->zipCodeRepository = $zipCodeRepository;
    }

    /**
     * getZipCode
     *
     * @param integer $zipCode
     * @return JsonResponse
     */
    public function getZipCode(int $zipCode) : JsonResponse
    {
        return $this->zipCodeRepository->zipCode($zipCode);
    }

}
