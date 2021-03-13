<?php

namespace App\Traits;
use GuzzleHttp\Client;

trait FootballDataApiTrait {

    /**
     * FootballController constructor.
     */
    public function __construct() {
        
    }

    /**
     * 
     */
    public function pullAPI($uri) {
        $client = new Client();
        $header = array('headers' => array('X-Auth-Token' => config('footballdata.authToken')));
        $response = $client->get($uri, $header);
        $array = json_decode($response->getBody()->getContents(), true);
        return $array;
    }

}
