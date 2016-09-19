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
        
        App\Spot::create([
        	"title"=>"El ángulo de Chapu",
        	"address"=>"Avenida Chapultepec Sur 425",
        	"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ex iure nulla delectus consequuntur, modi, autem facere! Voluptates hic autem ut, illum, architecto earum officia vel natus ea voluptatum aut! ",
        	"neighborhood"=>"Americana",
        	"city_id"=> 36,
        	"state_id"=> 14,
        	"country_id"=> 1,
        	"coords"=>"20.669700, -103.368504",
        	"category_id"=>1
        ]);

       App\Spot::create([
			"title"=>"Parque La Gran Plaza",
			"address"=>"Calzada Lázaro Cárdenas 3829",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam fuga inventore quo praesentium similique aspernatur a totam vel explicabo, dignissimos quam doloremque quod labore, recusandae dolores sit quibusdam, ipsam aperiam. ",
			"neighborhood"=>"Jardín de San Ignacio",
			"city_id"=> 38,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.670954, -103.405205",
			"category_id"=>2
		]);
        
		App\Spot::create([
			"title"=>"Mini Rampa CD. Granja",
			"address"=>"Avenida Ignacio L. Vallarta S/N",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum doloribus hic temporibus fugiat, optio nulla dolorem saepe tempora quibusdam laborum dolorum consequatur, quos. Excepturi, repudiandae ex dolores sapiente iusto ullam. ",
			"neighborhood"=>"Ciudad Granja",
			"city_id"=> 38,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.685602, -103.442861",
			"category_id"=>2
		]);
       
		App\Spot::create([
			"title"=>"Bowls San Isidro",
			"address"=>"Calle Paseo de las Palmas 365",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium incidunt eos perferendis ab assumenda explicabo, recusandae aut sit ut dignissimos sunt consequuntur eaque quisquam mollitia numquam deserunt nemo. Cumque, quisquam. ",
			"neighborhood"=>"Villas de Zapopan",
			"city_id"=> 38,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.754627, -103.385995",
			"category_id"=>2
        ]);
       
		App\Spot::create([
			"title"=>"Skatepark Montenegro",
			"address"=>"Carretera Federal 44 28",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, natus, aliquam. Quo at voluptatem pariatur, totam ut consequuntur reiciendis, aliquid aliquam quasi laboriosam quos neque iusto corporis et voluptates cum. ",
			"neighborhood"=>"Minerales",
			"city_id"=> 41,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.573432, -103.314326",
			"category_id"=>2
        ]);
		
		App\Spot::create([
			"title"=>"Skatepark La Jabonera",
			"address"=>"Antonio García Cubas 3491",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores saepe, ex maxime numquam, laborum optio amet harum incidunt porro ad explicabo, ipsa facere nihil laboriosam? Porro molestiae neque, velit harum! ",
			"neighborhood"=>"Jardines de Los Historiadores",
			"city_id"=> 36,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.646643, -103.290536",
			"category_id"=>2
        ]);

		App\Spot::create([
			"title"=>"Skatepark El Álamo",
			"address"=>"Textiles S/N",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quisquam esse fuga accusamus vel mollitia numquam libero veritatis voluptate repudiandae nulla, ex doloremque distinctio necessitatibus enim, iste quae facilis tenetur. ",
			"neighborhood"=>"Alamo Industrial",
			"city_id"=> 37,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.623162, -103.321591",
			"category_id"=>2
        ]);
       
		App\Spot::create([
			"title"=>"Gap de Pedro Moreno",
			"Address"=>"Pedro Moreno 1146",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quaerat sunt, ipsum repellat, qui incidunt, maxime vero dolores explicabo, perferendis rem suscipit repudiandae necessitatibus quod tempora facere iste. Labore, molestiae. ",
			"neighborhood"=>"Americana",
			"city_id"=> 36,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.675619, -103.361417",
			"category_id"=>1
		]);
       
		App\Spot::create([
			"title"=>"Bowl El Frijol",
			"address"=>"Avenida Valdepeñas 816-A",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sequi ipsa odit enim, animi consectetur tempora. Labore, dicta debitis tenetur consequuntur vel dignissimos esse, fuga reiciendis necessitatibus natus at totam. ",
			"neighborhood"=>"Lomas de Zapopan",
			"city_id"=> 38,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.741649, -103.399106",
			"category_id"=>2
		]);
		
		App\Spot::create([
			"title"=>"Skatepark Tabachines",
			"address"=>"Anillo Periférico Norte 1996",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perferendis repellat quasi eius vitae nulla cupiditate dignissimos porro error magni optio quae sunt sed iure a placeat, similique asperiores voluptatem! ",
			"neighborhood"=>"Tabachines",
			"city_id"=> 38,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.734278, -103.358667",
			"category_id"=>2
		]);
		
		App\Spot::create([       
			"title"=>"Skatepark Santa Cecilia (Sta. Chila)",
			"address"=>"De La Selva Norte y Sur 2150",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, eligendi! Aut rem quasi sunt quas, nobis vitae, praesentium error maxime quidem culpa, placeat obcaecati velit eaque in rerum nulla tempora! ",
			"neighborhood"=>"Santa Cecilia",
			"city_id"=> 36,
			"state_id"=> 14,
			"country_id"=> 1,
			"coords"=>"20.704390, -103.288825",
			"category_id"=>2
        ]);
		App\Spot::create([       
			"title"=>"Jardín San José de Analco",
			"address"=>"Calle Analco S/N",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
			"neighborhood"=>"Analco",
			"city_id"=>36,
			"state_id"=>14,
			"country_id"=>1,
			"coords"=>"20.667584, -103.341244",
			"category_id"=>1
        ]);
		App\Spot::create([
			"title"=>"Spot del Globo",
			"address"=>"Avenida 5 de Febrero 135B",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
			"neighborhood"=>"Las Conchas",
			"city_id"=>36,
			"state_id"=>14,
			"country_id"=>1,
			"coords"=>"20.661342, -103.343030",
			"category_id"=>1
        ]);
		App\Spot::create([
			"title"=>"10 Escalones Pila Seca",
			"address"=>"Calle Donato Guerra 5",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
			"neighborhood"=>"Prados del Nilo",
			"city_id"=>37,
			"state_id"=>14,
			"country_id"=>1,
			"coords"=>"20.641733, -103.316936",
			"category_id"=>1
        ]);
		App\Spot::create([
			"title"=>"Escaleras CAAV",
			"address"=>"Calle Miguel Lerdo de Tejada 20100",
			"description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
			"neighborhood"=>"Lafayette",
			"city_id"=>36,
			"state_id"=>14,
			"country_id"=>1,
			"coords"=>"20.671329, -103.370361",
			"category_id"=>1
        ]);
		App\Spot::create([	
			"title"=>"Escaleras CAAV",
			"address"=>"Calle Miguel Lerdo de Tejada 20100",
			"description"=>"El spot no es nada fácil, son unas escaleras con barandal pero lo que debes brincar es el barandal, al parecer no hay otra forma. Lo bueno es que tiene bastante espacio para agarrar vuelo.",
			"neighborhood"=>"Lafayette",
			"city_id"=>36,
			"state_id"=>14,
			"country_id"=>1,
			"coords"=>"20.671329, -103.370361",
			"category_id"=>1
		]);

    }
}
