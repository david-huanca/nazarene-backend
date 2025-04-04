<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;
class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $districts=
        [
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Centro Oeste', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Espirito Santo (Capixaba)', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Minas Gerais', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Brasil Metropolitan City of Rio de Janeiro', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Nordeste Paulista', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Noroeste Paulista', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Campinas', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Paulistano', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Rio De Janiero Baixada I', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Rio De Janiero Baixada II', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Rio de Janiero Grande Rio', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Rio Regiao dos Lagos', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'São Paulo', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Curitiba', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Gaucho (Porto Alegre)', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Londrina', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Santa Catarina', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 3, 'status' => true, 'name' => 'Nordeste Central', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Nordeste Meridional', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Rio Grande do Norte', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Norte Amazonas (Amazônia)', 'country_id' => 3],
            ['area_id' => 1, 'fase' => 2, 'status' => true, 'name' => 'Setentrional', 'country_id' => 3],


            //Perú
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Alto Amazonas', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Alto Marañon', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Amazonas', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Andino', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Cajamarca', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Central', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Condorcanqui', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'La Libertad Chavin', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 2, 'status' => true, 'name' => 'Loreto', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Nororiente', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Norte', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 2, 'status' => true, 'name' => 'Oriente Central', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Pacifico Norte', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Sur Central', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Sur', 'country_id' => 8],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'Utcubamba', 'country_id' => 8],

            //Bolivia
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Central', 'country_id' => 2],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'La Paz', 'country_id' => 2],
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Los Yungas', 'country_id' => 2],
            ['area_id' => 5, 'fase' => 2, 'status' => true, 'name' => 'Santa Cruz', 'country_id' => 2],
            ['area_id' => 5, 'fase' => 1, 'status' => true, 'name' => 'Sur', 'country_id' => 2],
            ['area_id' => 5, 'fase' => 3, 'status' => true, 'name' => 'El Alto', 'country_id' => 2],

            //Colombia
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Central Norte', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Central Sur', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Costa Norte', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Eje Cafetero', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Nor Occidental', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Nor Oriental', 'country_id' => 5],
            ['area_id' => 6, 'fase' => 3, 'status' => true, 'name' => 'Sur Occidental', 'country_id' => 5],

            //Ecuador
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Austro', 'country_id' => 6],
            ['area_id' => 6, 'fase' => 3, 'status' => true, 'name' => 'Costa', 'country_id' => 6],
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Costa Norte', 'country_id' => 6],
            ['area_id' => 6, 'fase' => 3, 'status' => true, 'name' => 'Sierra Centro', 'country_id' => 6],
            ['area_id' => 6, 'fase' => 3, 'status' => true, 'name' => 'Sierra Norte', 'country_id' => 6],
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Sierra Sur', 'country_id' => 6],

            //Venezuela
            ['area_id' => 6, 'fase' => 1, 'status' => true, 'name' => 'Andino', 'country_id' => 10],
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Centro Occidental', 'country_id' => 10],
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Lago', 'country_id' => 10],
            ['area_id' => 6, 'fase' => 3, 'status' => true, 'name' => 'Llanos Occidentales', 'country_id' => 10],
            ['area_id' => 6, 'fase' => 2, 'status' => true, 'name' => 'Primero', 'country_id' => 10],

            //Argentina
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Buenos Aires Oeste', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 3, 'status' => true, 'name' => 'Central', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Costero', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Cuyo', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 3, 'status' => true, 'name' => 'Litoral', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Mediterraneo', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Mesopotamico', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Nordeste (N.E.A.)', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Noroeste (N.O.A.)', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Patagonia Central', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Patagonia Norte', 'country_id' => 1],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Pueblos Originarios', 'country_id' => 1],

            //Chile
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Bio Bio', 'country_id' => 4],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Central', 'country_id' => 4],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Los Lagos', 'country_id' => 4],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Norte', 'country_id' => 4],

            //Uruguay
            ['area_id' => 7, 'fase' => 3, 'status' => true, 'name' => 'Norte', 'country_id' => 9],
            ['area_id' => 7, 'fase' => 3, 'status' => true, 'name' => 'Sur', 'country_id' => 9],

            //Paraguay
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Central', 'country_id' => 7],
            ['area_id' => 7, 'fase' => 1, 'status' => true, 'name' => 'Norte', 'country_id' => 7],
            ['area_id' => 7, 'fase' => 2, 'status' => true, 'name' => 'Sur', 'country_id' => 7],
        ];

        District::insert($districts);
    }
}
