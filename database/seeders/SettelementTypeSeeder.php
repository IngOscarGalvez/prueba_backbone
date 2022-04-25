<?php

namespace Database\Seeders;

use App\Models\SettlementType;
use Illuminate\Database\Seeder;

class SettelementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settelementTypes = [
            ['key'  => 1,'name'  => 'Aeropuerto'],
            ['key'  => 2,'name'  => 'Barrio'],
            ['key'  => 4,'name'  => 'Campamento'],
            ['key'  => 9,'name'  => 'Colonia'],
            ['key'  => 10,'name'  => 'Condominio'],
            ['key'  => 11,'name'  => 'Congregación'],       
            ['key'  => 12,'name'  => 'Conjunto habitacional'],
            ['key'  => 15,'name'  => 'Ejido'],
            ['key'  => 16,'name'  => 'Estación'],
            ['key'  => 17,'name'  => 'Equipamiento'],
            ['key'  => 18,'name'  => 'Exhacienda'],
            ['key'  => 20,'name'  => 'Finca'],
            ['key'  => 21,'name'  => 'Fraccionamiento'],
            ['key'  => 23,'name'  => 'Granja'],
            ['key'  => 24,'name'  => 'Hacienda'],
            ['key'  => 26,'name'  => 'Parque industrial'],
            ['key'  => 27,'name'  => 'Poblado comunal'],
            ['key'  => 28,'name'  => 'Pueblo'],
            ['key'  => 29,'name'  => 'Ranchería'],
            ['key'  => 30,'name'  => 'Residencial'],
            ['key'  => 31,'name'  => 'Unidad habitacional'],
            ['key'  => 32,'name'  => 'Villa'],
            ['key'  => 33,'name'  => 'Zona comercial'],
            ['key'  => 34,'name'  => 'Zona federal'],
            ['key'  => 37,'name'  => 'Zona industrial'],
            ['key'  => 40,'name'  => 'Puerto'],
            ['key'  => 45,'name'  => 'Paraje'],
            ['key'  => 46,'name'  => 'Zona naval'],
            ['key'  => 47,'name'  => 'Zona militar'],
            ['key'  => 48,'name'  => 'Rancho'],
        ];
        foreach ($settelementTypes as $settelementType) {
            SettlementType::create($settelementType);
        }       
    }
}
