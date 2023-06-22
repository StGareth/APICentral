<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Usamamuneerchaudhary\LaraClient\LaraClient;

class ApiController extends Controller
{
    public function __construct() {

    }

    /*
     * POST Body Parameters:
     *      Key             Value
     *      api             <api name as configured in lara_client.php>
     *      method          get/post/etc
     *      path            <path beyond configured base_uri>
     *      params[key]     <value>
     */
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

        return response()->json($response, 200);
    }
}
