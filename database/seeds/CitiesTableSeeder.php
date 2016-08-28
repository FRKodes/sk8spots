<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\City::create(["name"=>"Aguascalientes", "state_id"=> 1]);
        App\City::create(["name"=>"Ensenada", "state_id"=> 2]);
        App\City::create(["name"=>"Mexicali", "state_id"=> 2]);
        App\City::create(["name"=>"Tijuana", "state_id"=> 2]);
        App\City::create(["name"=>"La Paz", "state_id"=> 3]);
        App\City::create(["name"=>"Los Cabos", "state_id"=> 3]);
        App\City::create(["name"=>"Campeche", "state_id"=> 4]);
        App\City::create(["name"=>"Ciudad del Carmen", "state_id"=> 4]);
        App\City::create(["name"=>"Tuxtla Gutiérrez", "state_id"=> 5]);
        App\City::create(["name"=>"Chihuahua", "state_id"=> 6]);
        App\City::create(["name"=>"Juárez", "state_id"=> 6]);
        App\City::create(["name"=>"Tapachula", "state_id"=> 5]);
        App\City::create(["name"=>"Saltillo", "state_id"=> 8]);
        App\City::create(["name"=>"Monclova ", "state_id"=> 8]);
        App\City::create(["name"=>"Frontera", "state_id"=> 8]);
        App\City::create(["name"=>"La Laguna", "state_id"=> 8]);
        App\City::create(["name"=>"Piedras Negras", "state_id"=> 8]);
        App\City::create(["name"=>"Tecomán", "state_id"=> 9]);
        App\City::create(["name"=>"Villa de Álvarez", "state_id"=> 9]);
        App\City::create(["name"=>"Colima", "state_id"=> 9]);
        App\City::create(["name"=>"Manzanillo", "state_id"=> 9]);
        App\City::create(["name"=>"Durango", "state_id"=> 10]);
        App\City::create(["name"=>"Celaya", "state_id"=> 11]);
        App\City::create(["name"=>"Guanajuato", "state_id"=> 11]);
        App\City::create(["name"=>"Irapuato", "state_id"=> 11]);
        App\City::create(["name"=>"León", "state_id"=> 11]);
        App\City::create(["name"=>"La Piedad", "state_id"=> 11]);
        App\City::create(["name"=>"Pénjamo", "state_id"=> 11]);
        App\City::create(["name"=>"San Francisco del Rincón", "state_id"=> 11]);
        App\City::create(["name"=>"Salamanca", "state_id"=> 11]);
        App\City::create(["name"=>"Acapulco", "state_id"=> 12]);
        App\City::create(["name"=>"Chilpancingo", "state_id"=> 12]);
        App\City::create(["name"=>"Tula", "state_id"=> 13]);
        App\City::create(["name"=>"Tulancingo", "state_id"=> 13]);
        App\City::create(["name"=>"Pachuca", "state_id"=> 13]);
        App\City::create(["name"=>"Guadalajara", "state_id"=> 14]);
        App\City::create(["name"=>"Tlaquepaque", "state_id"=> 14]);
        App\City::create(["name"=>"Zapopan", "state_id"=> 14]);
        App\City::create(["name"=>"Tonalá", "state_id"=> 14]);
        App\City::create(["name"=>"Tlajomulco", "state_id"=> 14]);
        App\City::create(["name"=>"Las Pintitas", "state_id"=> 14]);
        App\City::create(["name"=>"Ocotlán", "state_id"=> 14]);
        App\City::create(["name"=>"Puerto Vallarta", "state_id"=> 14]);
        App\City::create(["name"=>"Valle de México", "state_id"=> 15]);
        App\City::create(["name"=>"Toluca", "state_id"=> 15]);
        App\City::create(["name"=>"Jacona", "state_id"=> 16]);
        App\City::create(["name"=>"Zamora", "state_id"=> 16]);
        App\City::create(["name"=>"Morelia", "state_id"=> 16]);
        App\City::create(["name"=>"Uruapan", "state_id"=> 16]);
        App\City::create(["name"=>"Cuautla", "state_id"=> 17]);
        App\City::create(["name"=>"Cuernavaca", "state_id"=> 17]);
        App\City::create(["name"=>"Tepic", "state_id"=> 18]);
        App\City::create(["name"=>"Monterrey", "state_id"=> 19]);
        App\City::create(["name"=>"Oaxaca", "state_id"=> 20]);
        App\City::create(["name"=>"Tehuantepec", "state_id"=> 20]);
        App\City::create(["name"=>"Salina Cruz", "state_id"=> 20]);
        App\City::create(["name"=>"Puebla", "state_id"=> 21]);
        App\City::create(["name"=>"Tehuacán", "state_id"=> 21]);
        App\City::create(["name"=>"Querétaro", "state_id"=> 22]);
        App\City::create(["name"=>"San Juan del Río", "state_id"=> 22]);
        App\City::create(["name"=>"Cancún", "state_id"=> 23]);
        App\City::create(["name"=>"Chetumal", "state_id"=> 23]);
        App\City::create(["name"=>"Ciudad Fernández", "state_id"=> 24]);
        App\City::create(["name"=>"Rioverde", "state_id"=> 24]);
        App\City::create(["name"=>"San Luis Potosí", "state_id"=> 24]);
        App\City::create(["name"=>"Soledad", "state_id"=> 24]);
        App\City::create(["name"=>"Los Mochis", "state_id"=> 25]);
        App\City::create(["name"=>"Culiacán", "state_id"=> 25]);
        App\City::create(["name"=>"Mazatlán", "state_id"=> 25]);
        App\City::create(["name"=>"Ciudad Obregón", "state_id"=> 26]);
        App\City::create(["name"=>"Guaymas", "state_id"=> 26]);
        App\City::create(["name"=>"Hermosillo", "state_id"=> 26]);
        App\City::create(["name"=>"Cárdenas", "state_id"=> 27]);
        App\City::create(["name"=>"Villahermosa", "state_id"=> 27]);
        App\City::create(["name"=>"Tampico", "state_id"=> 27]);
        App\City::create(["name"=>"Matamoros", "state_id"=> 27]);
        App\City::create(["name"=>"Nuevo Laredo", "state_id"=> 27]);
        App\City::create(["name"=>"Reynosa", "state_id"=> 27]);
        App\City::create(["name"=>"Río Bravo", "state_id"=> 27]);
        App\City::create(["name"=>"Ciudad Victoria", "state_id"=> 27]);
        App\City::create(["name"=>"Tlaxcala", "state_id"=> 29]);
        App\City::create(["name"=>"Apizaco", "state_id"=> 29]);
        App\City::create(["name"=>"Veracruz", "state_id"=> 30]);
        App\City::create(["name"=>"Córdoba", "state_id"=> 30]);
        App\City::create(["name"=>"Orizaba", "state_id"=> 30]);
        App\City::create(["name"=>"Xalapa", "state_id"=> 30]);
        App\City::create(["name"=>"Poza Rica", "state_id"=> 30]);
        App\City::create(["name"=>"Coatzacoalcos", "state_id"=> 30]);
        App\City::create(["name"=>"Minatitlán", "state_id"=> 30]);
        App\City::create(["name"=>"Mérida", "state_id"=> 31]);
        App\City::create(["name"=>"Zacatecas", "state_id"=> 32]);
        App\City::create(["name"=>"Guadalupe", "state_id"=> 32]);
    }
}
