<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Http\Request;
use Zend\Feed\Reader\Entry\EntryInterface;
use Zend\Feed\Reader\Reader;

class RssController extends Controller
{
    public function index(){
        $guzzle = new Client();
        $response = $guzzle->post('https://rest.nexmo.com/sms/json',  [
            'form_params' => [
                'api_key' => env('NEXMO_API_KEY'),
                'api_secret' => env('NEXMO_API_SECRET'),
                'to' => '37255668863',
                'from' => 'Kaspar',
                'text' => 'Muhahha'
            ]
        ]);
        $json = $response->getBody()->getContents();
        var_dump($json);
        var_dump(json_decode($json));
    }
}
