<?php

namespace Database\Seeders;

use App\Models\FederalEntity;
use Illuminate\Database\Seeder;

class FederalEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $federalEntities = [
            ['key'  => 1,'name'  => 'AGUASCALIENTES'],
            ['key'  => 2,'name'  => 'BAJA CALIFORNIA'],
            ['key'  => 3,'name'  => 'BAJA CALIFORNIA SUR'],
            ['key'  => 4,'name'  => 'CAMPECHE'],
            ['key'  => 5,'name'  => 'COAHUILA DE ZARAGOZA'],
            ['key'  => 6,'name'  => 'COLIMA'],
            ['key'  => 7,'name'  => 'CHIAPAS'],
            ['key'  => 8,'name'  => 'CHIHUAHUA'],
            ['key'  => 9,'name'  => 'CIUDAD DE MEXICO'],
            ['key'  => 10,'name'  => 'DURANGO'],
            ['key'  => 11,'name'  => 'GUANAJUATO'],
            ['key'  => 12,'name'  => 'GUERRERO'],
            ['key'  => 13,'name'  => 'HIDALGO'],
            ['key'  => 14,'name'  => 'JALISCO'],
            ['key'  => 15,'name'  => 'MEXICO'],
            ['key'  => 16,'name'  => 'MICHOACAN DE OCAMPO'],
            ['key'  => 17,'name'  => 'MORELOS'],
            ['key'  => 18,'name'  => 'NAYARIT'],
            ['key'  => 19,'name'  => 'NUEVO LEON'],
            ['key'  => 20,'name'  => 'OAXACA'],
            ['key'  => 21,'name'  => 'PUEBLA'],
            ['key'  => 22,'name'  => 'QUERETARO'],
            ['key'  => 23,'name'  => 'QUINTANA ROO'],
            ['key'  => 24,'name'  => 'SAN LUIS POTOSI'],
            ['key'  => 25,'name'  => 'SINALOA'],
            ['key'  => 26,'name'  => 'SONORA'],
            ['key'  => 27,'name'  => 'TABASCO'],
            ['key'  => 28,'name'  => 'TAMAULIPAS'],
            ['key'  => 29,'name'  => 'TLAXCALA'],
            ['key'  => 30,'name'  => 'VERACRUZ DE IGNACIO DE LA LLAVE'],
            ['key'  => 31,'name'  => 'YUCATAN'],
            ['key'  => 32,'name'  => 'ZACATECAS'],
        ];
        
        foreach ($federalEntities as $federalEntity) {
            FederalEntity::create($federalEntity);
        }       
    }
}
