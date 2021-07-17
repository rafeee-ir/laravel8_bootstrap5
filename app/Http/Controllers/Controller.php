<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function connectToApi(){
        $client = new Client(array(
            'cookies' => true,
        ));
        $client->request('POST', 'https://mdapp.kins.ir/cins/login',
            [    'form_params' => [
                'username' => 'e.merkori',
                'password' => 'QWErty!@#456',
                'grant_type' => 'password',
            ]
            ]);
        return $client;
    }
}
