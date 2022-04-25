<?php

namespace Database\Seeders;

use App\Models\FederalEntity;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\ZipCode;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *   
     * @return void
     */
    public function run()
    {
        $federalEntities = FederalEntity::get('key');   
        foreach ($federalEntities as $federalEntity) {     
            $municipalities  =  (array)json_decode(File::get("public/json/federal-entities/{$federalEntity->key}.json"));                     
            $municipalities  =  collect($municipalities['RECORDS']);
            $zipCodes  =  $municipalities->groupBy('zip_code');    
            $municipalities  =  $municipalities->unique('municipality_key');        
            $this->setMunicipalities($municipalities->values()->all());         
            $this->setZipCodes($zipCodes);
        }
    }

    /**
     * Set ZipCodes
     * 
     * @param object $zipCodes
     * @return void
     */
    public function setZipCodes(object $zipCodes)
    {
        foreach ($zipCodes as $zipCode) {
            $currentZipCode  =  $this->setZipCode($zipCode->first());       
            $this->setSettlements($zipCode, $currentZipCode);              
        }
    }

    /**
     * Register zipCodes
     * 
     * @param object $zipCopde
     * @return App\Models\ZipCode
     */
    public function setZipCode(object $zipCode): ZipCode
    {
        $municipality = Municipality::where([
            ['federal_entity_id', (int)$zipCode->federal_entity_key],            
            ['key', (int)$zipCode->municipality_key]
        ])->first();   

        return ZipCode::create([
            'zip_code'  =>  $zipCode->zip_code,
            'locality'  =>  $this->removeAccents($zipCode->locality), 
            'federal_entity_id' =>  $zipCode->federal_entity_key,
            'municipality_id'  =>  $municipality->id
        ]); 
    }

    /**
     * Register municipalities
     *
     * @param array $municipalities
     * @return void
     */
    public function setMunicipalities(array $municipalities)
    {
        foreach ($municipalities as $municipality) {
            Municipality::create([
                'federal_entity_id' => $municipality->federal_entity_key,
                'key'  => $municipality->municipality_key,
                'name'  => $this->removeAccents($municipality->municipality)
            ]);                                    
        }
    }

    /**
     * Register settlements
     *
     * @param object $settlements
     * @param object $currentZipCode
     * @return void
     */
    public function setSettlements(object $settlements, object $currentZipCode)
    {        
        foreach ($settlements as $settlement) {            
            Settlement::create([
                'key'  => $settlement->settlement_key,
                'name'  => $this->removeAccents($settlement->settlement),
                'zone_type'  => $this->removeAccents($settlement->zone_type),
                'zip_code_id'  => $currentZipCode->id,
                'settlement_type_id'  => $settlement->settlement_type_key,
            ]);  
        }
    }

    /**
     * Remove accents
     *
     * @param string $string
     * @return string
     */
    public function removeAccents(string $string)
    {
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
     
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
     
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
     
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
     
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
     
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        return mb_strtoupper($string);
    }

}
