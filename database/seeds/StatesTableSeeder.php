<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\State::create(["name"=>"Aguascalientes", "short_name"=>"Ags", "country_id"=> 1 ]);
        App\State::create(["name"=>"Baja California", "short_name"=>"B.C", "country_id"=> 1 ]);
        App\State::create(["name"=>"Baja California Sur", "short_name"=>"B.C.S", "country_id"=> 1 ]);
        App\State::create(["name"=>"Campeche", "short_name"=>"Camp", "country_id"=> 1 ]);
        App\State::create(["name"=>"Chiapas", "short_name"=>"Chis", "country_id"=> 1 ]);
        App\State::create(["name"=>"Chihuahua", "short_name"=>"Chih", "country_id"=> 1 ]);
        App\State::create(["name"=>"Ciudad de México", "short_name"=>"CDMX", "country_id"=> 1 ]);
        App\State::create(["name"=>"Coahuila", "short_name"=>"Coah", "country_id"=> 1 ]);
        App\State::create(["name"=>"Colima", "short_name"=>"Col", "country_id"=> 1 ]);
        App\State::create(["name"=>"Durango", "short_name"=>"Dgo", "country_id"=> 1 ]);
        App\State::create(["name"=>"Guanajuato", "short_name"=>"Gto", "country_id"=> 1 ]);
        App\State::create(["name"=>"Guerrero", "short_name"=>"Gro", "country_id"=> 1 ]);
        App\State::create(["name"=>"Hidalgo", "short_name"=>"Hgo", "country_id"=> 1 ]);
        App\State::create(["name"=>"Jalisco", "short_name"=>"Jal", "country_id"=> 1 ]);
        App\State::create(["name"=>"México", "short_name"=>"Méx", "country_id"=> 1 ]);
        App\State::create(["name"=>"Michoacán", "short_name"=>"Mich", "country_id"=> 1 ]);
        App\State::create(["name"=>"Morelos", "short_name"=>"Mor", "country_id"=> 1 ]);
        App\State::create(["name"=>"Nayarit", "short_name"=>"Nay", "country_id"=> 1 ]);
        App\State::create(["name"=>"Nuevo León", "short_name"=>"N.L", "country_id"=> 1 ]);
        App\State::create(["name"=>"Oaxaca", "short_name"=>"Oax", "country_id"=> 1 ]);
        App\State::create(["name"=>"Puebla", "short_name"=>"Pue", "country_id"=> 1 ]);
        App\State::create(["name"=>"Querétaro", "short_name"=>"Qro", "country_id"=> 1 ]);
        App\State::create(["name"=>"Quintana Roo", "short_name"=>"Q.R", "country_id"=> 1 ]);
        App\State::create(["name"=>"San Luis Potosí", "short_name"=>"S.L.P", "country_id"=> 1 ]);
        App\State::create(["name"=>"Sinaloa", "short_name"=>"Sin", "country_id"=> 1 ]);
        App\State::create(["name"=>"Sonora", "short_name"=>"Son", "country_id"=> 1 ]);
        App\State::create(["name"=>"Tabasco", "short_name"=>"Tab", "country_id"=> 1 ]);
        App\State::create(["name"=>"Tamaulipas", "short_name"=>"Tamps", "country_id"=> 1 ]);
        App\State::create(["name"=>"Tlaxcala", "short_name"=>"Tlax", "country_id"=> 1 ]);
        App\State::create(["name"=>"Veracruz", "short_name"=>"Ver", "country_id"=> 1 ]);
        App\State::create(["name"=>"Yucatán", "short_name"=>"Yuc", "country_id"=> 1 ]);
        App\State::create(["name"=>"Zacatecas", "short_name"=>"Zac", "country_id"=> 1 ]);
    }
}
