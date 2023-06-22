<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Usamamuneerchaudhary\LaraClient\LaraClient;

class ApiController extends Controller
{
    public function __construct() {

    }

    public function call(Request $request) {
        $data = $request->all();
        $client = new LaraClient($data['api']);

//        dd($client);
        $method = $data['method'];
        $path = $data['path'];
        $params = [];
        foreach($data['params'] as $key => $param) {
            $params[$key] = $param;
        }

        $response = $client->$method($path, $params);

        dd($response->getData());
    }
}
