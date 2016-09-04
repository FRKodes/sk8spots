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
        	"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ex iure nulla delectus consequuntur, modi, autem facere! Voluptates hic autem ut, illum, architecto earum officia vel natus ea voluptatum aut! ",
        	"neighborhood"=>"Americana",
        	"city"=> 36,
        	"state"=> 14,
        	"country"=> 1,
        	"coords"=>"20.669700, -103.368504",
        	"category_id"=>1
        ]);

       App\Spot::create([
			"title"=>"Parque La Gran Plaza",
			"address"=>"Calzada Lázaro Cárdenas 3829",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam fuga inventore quo praesentium similique aspernatur a totam vel explicabo, dignissimos quam doloremque quod labore, recusandae dolores sit quibusdam, ipsam aperiam. ",
			"neighborhood"=>"Jardín de San Ignacio",
			"city"=> 38,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.670954, -103.405205",
			"category_id"=>1
		]);
        
		App\Spot::create([
			"title"=>"Mini Rampa CD. Granja",
			"address"=>"Avenida Ignacio L. Vallarta S/N",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum doloribus hic temporibus fugiat, optio nulla dolorem saepe tempora quibusdam laborum dolorum consequatur, quos. Excepturi, repudiandae ex dolores sapiente iusto ullam. ",
			"neighborhood"=>"Ciudad Granja",
			"city"=> 38,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.685602, -103.442861",
			"category_id"=>1
		]);
       
		App\Spot::create([
			"title"=>"Bowls San Isidro",
			"address"=>"Calle Paseo de las Palmas 365",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium incidunt eos perferendis ab assumenda explicabo, recusandae aut sit ut dignissimos sunt consequuntur eaque quisquam mollitia numquam deserunt nemo. Cumque, quisquam. ",
			"neighborhood"=>"Villas de Zapopan",
			"city"=> 38,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.754627, -103.385995",
			"category_id"=>1
        ]);
       
		App\Spot::create([
			"title"=>"Skatepark Montenegro",
			"address"=>"Carretera Federal 44 28",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, natus, aliquam. Quo at voluptatem pariatur, totam ut consequuntur reiciendis, aliquid aliquam quasi laboriosam quos neque iusto corporis et voluptates cum. ",
			"neighborhood"=>"Minerales",
			"city"=> 41,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.573432, -103.314326",
			"category_id"=>1
        ]);
		
		App\Spot::create([
			"title"=>"Skatepark La Jabonera",
			"address"=>"Antonio García Cubas 3491",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores saepe, ex maxime numquam, laborum optio amet harum incidunt porro ad explicabo, ipsa facere nihil laboriosam? Porro molestiae neque, velit harum! ",
			"neighborhood"=>"Jardines de Los Historiadores",
			"city"=> 36,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.646643, -103.290536",
			"category_id"=>1
        ]);

		App\Spot::create([
			"title"=>"Skatepark El Álamo",
			"address"=>"Textiles S/N",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quisquam esse fuga accusamus vel mollitia numquam libero veritatis voluptate repudiandae nulla, ex doloremque distinctio necessitatibus enim, iste quae facilis tenetur. ",
			"neighborhood"=>"Alamo Industrial",
			"city"=> 37,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.623162, -103.321591",
			"category_id"=>1
        ]);
       
		App\Spot::create([
			"title"=>"Gap de Pedro Moreno",
			"Address"=>"Pedro Moreno 1146",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quaerat sunt, ipsum repellat, qui incidunt, maxime vero dolores explicabo, perferendis rem suscipit repudiandae necessitatibus quod tempora facere iste. Labore, molestiae. ",
			"neighborhood"=>"Americana",
			"city"=> 36,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.675619, -103.361417",
			"category_id"=>1
		]);
       
		App\Spot::create([
			"title"=>"Bowl El Frijol",
			"address"=>"Avenida Valdepeñas 816-A",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sequi ipsa odit enim, animi consectetur tempora. Labore, dicta debitis tenetur consequuntur vel dignissimos esse, fuga reiciendis necessitatibus natus at totam. ",
			"neighborhood"=>"Lomas de Zapopan",
			"city"=> 38,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.741649, -103.399106",
			"category_id"=>1
		]);
		
		App\Spot::create([
			"title"=>"Skatepark Tabachines",
			"address"=>"Anillo Periférico Norte 1996",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perferendis repellat quasi eius vitae nulla cupiditate dignissimos porro error magni optio quae sunt sed iure a placeat, similique asperiores voluptatem! ",
			"neighborhood"=>"Tabachines",
			"city"=> 38,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.734278, -103.358667",
			"category_id"=>1
		]);
		
		App\Spot::create([       
			"title"=>"Skatepark Santa Cecilia (Sta. Chila)",
			"address"=>"De La Selva Norte y Sur 2150",
			"descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, eligendi! Aut rem quasi sunt quas, nobis vitae, praesentium error maxime quidem culpa, placeat obcaecati velit eaque in rerum nulla tempora! ",
			"neighborhood"=>"Santa Cecilia",
			"city"=> 36,
			"state"=> 14,
			"country"=> 1,
			"coords"=>"20.704390, -103.288825",
			"category_id"=>1
        ]);

    }
}
