<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // factory('App\User', 2)->create();
        App\Spot::create([
        	"title"=>"El ángulo de Chapu",
        	"address"=>"Avenida Chapultepec Sur 425",
        	"neighborhood"=>"Americana",
        	"city"=>"Guadalajara",
        	"state"=>"Jalisco",
        	"country"=>"México",
        	"coords"=>"20.669700, -103.368504",
        	"category_id"=>1
        ]);

       App\Spot::create([
			"title"=>"Parque La Gran Plaza",
			"address"=>"Calzada Lázaro Cárdenas 3829",
			"neighborhood"=>"Jardín de San Ignacio",
			"city"=>"Zapopan",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.670954, -103.405205",
			"category_id"=>1
		]);
        
		App\Spot::create([
			"title"=>"Mini Rampa CD. Granja",
			"address"=>"Avenida Ignacio L. Vallarta S/N",
			"neighborhood"=>"Ciudad Granja",
			"city"=>"Zapopan",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.685602, -103.442861",
			"category_id"=>1
		]);
       
		App\Spot::create([
			"title"=>"Bowls San Isidro",
			"address"=>"Calle Paseo de las Palmas 365",
			"neighborhood"=>"Villas de Zapopan",
			"city"=>"Zapopan",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.754627, -103.385995",
			"category_id"=>1
        ]);
       
		App\Spot::create([
			"title"=>"Skatepark Montenegro",
			"address"=>"Carretera Federal 44 28",
			"neighborhood"=>"Minerales",
			"city"=>"Las Pintitas",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.573432, -103.314326",
			"category_id"=>1
        ]);
		
		App\Spot::create([
			"title"=>"Skatepark La Jabonera",
			"address"=>"Antonio García Cubas 3491",
			"neighborhood"=>"Jardines de Los Historiadores",
			"city"=>"Guadalajara",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.646643, -103.290536",
			"category_id"=>1
        ]);

		App\Spot::create([
			"title"=>"Skatepark El Álamo",
			"address"=>"Textiles S/N",
			"neighborhood"=>"Alamo Industrial",
			"city"=>"San Pedro Tlaquepaque",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.623162, -103.321591",
			"category_id"=>1
        ]);
       
		App\Spot::create([
			"title"=>"Gap de Pedro Moreno",
			"Address"=>"Pedro Moreno 1146",
			"neighborhood"=>"Americana",
			"city"=>"Guadalajara",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.675619, -103.361417",
			"category_id"=>1
		]);
       
		App\Spot::create([
			"title"=>"Bowl El Frijol",
			"address"=>"Avenida Valdepeñas 816-A",
			"neighborhood"=>"Lomas de Zapopan",
			"city"=>"Zapopan",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.741649, -103.399106",
			"category_id"=>1
		]);
		
		App\Spot::create([
			"title"=>"Skatepark Tabachines",
			"address"=>"Anillo Periférico Norte 1996",
			"neighborhood"=>"Tabachines",
			"city"=>"Zapopan",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.734278, -103.358667",
			"category_id"=>1
		]);
		
		App\Spot::create([       
			"title"=>"Skatepark Santa Cecilia (Sta. Chila)",
			"address"=>"De La Selva Norte y Sur 2150",
			"neighborhood"=>"Santa Cecilia",
			"city"=>"Guadalajara",
			"state"=>"Jalisco",
			"country"=>"México",
			"coords"=>"20.704390, -103.288825",
			"category_id"=>1
        ]);

    }
}
