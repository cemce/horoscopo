<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Sign;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_ES'); // create a Spanish faker
        
        
        $signosNombre = array(
            "aquarius",
            "Pisces",
            "Aries",
            "taurus",
            "Gemini",
            "Cancer",
            "Leo",
            "Virgo",
            "Libra",
            "Scorpio",
            "Sagittarius",
            "Capricorn",
        );
        foreach ($signosNombre as $signo) {

            $json = file_get_contents('http://horoscope-api.herokuapp.com/horoscope/week/' . $signo);
            $data = json_decode($json);
            $prediccioENG = $data->horoscope;
            
            if (substr($prediccioENG, 0 ,2) == '["') {
                $prediccioENG = substr($prediccioENG, 2, -2);
            }

            $tr = new GoogleTranslate('es');
            $prediccioES = $tr->translate($prediccioENG);
            $signo = $tr->translate($signo);

            Sign::create([
                'sign' => $signo,
                'description' => $prediccioES,
            ]);
        }
        
    }
}
