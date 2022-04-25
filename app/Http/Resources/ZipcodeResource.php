<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipcodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $settlements = [];

        foreach ($this->settlements as $data) {

            array_push($settlements,[
                'key' => (int) $data->key,
                'name' => $data->name,
                'zone_type' => $data->zone_type,
                'settlement_type' => [
                    'name' => $data->settlementType->name
                ]
            ]);
        }
        return [
            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => [
                'key' => (int) $this->federalEntity->key,
                'name' => $this->federalEntity->name,
                'code' => $this->federalEntity->code
            ],
            'settlements' => $settlements,
            'municipality' => [
                'key' => (int) $this->municipality->key,
                'name' => $this->municipality->name,
            ]


       ];
    }
}
