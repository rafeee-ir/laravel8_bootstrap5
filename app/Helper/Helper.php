<?php


namespace App\Helper;


use GuzzleHttp\Client;

class Helper
{
    public static function Mdapp()
    {
        return new Helper();
    }
    public function connectToApi(){
        $client = new Client(array(
            'base_uri' => 'https://mdapp.kins.ir/cins/',
            'cookies' => true,
            'timeout' => 2.0,
        ));
        $client->request('POST', 'login',
            [    'form_params' => [
                'username' => env('MDAPP_USERNAME',null),
                'password' => env('MDAPP_PASSWORD',null),
                'grant_type' => 'password',
            ]
            ]);
        return $client;
    }
    public function get($uri){
        $res = $this->connectToApi()->request('GET',$uri,[
            'accept' => 'application/json;charset=UTF-8'
        ]);
        return json_decode($res->getBody()->getContents(),true);

//        @foreach($array_data as $key=>$value){
//            <tr>
//    <td>{{$value["id"]}}</td>
//    <td>{{$value["user_id"]}}</td>
//    <td>{{$value["patient_name"]}}</td>
//    <td>{{$value["age"]}}</td>
//    <td>{{$value["sex"]}}</td>
//</tr>
//            @endforeach

    }
    public function post($uri){
        $res = $this->connectToApi()->get($uri)->getBody()->getContents();
        return json_decode($res,true);
    }
}
