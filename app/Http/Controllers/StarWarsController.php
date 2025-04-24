<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StarWarsController extends Controller
{
    public function StarWarsData(){
        $client = new Client();
        $response = $client->request('GET','https://swapi.dev/api/people/4');

        $data = json_decode($response->getBody() , true);

        return view('starwars',['character'=>&date])


    }
    
}
