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
        $method = $data['method'];
        $path = $data['path'];
        $params = [];
        if(isset($data['params'])){foreach($data['params'] as $key => $param) {
            $params[$key] = $param;
        }}

        if(str_contains($path, 'http') || !config()->has($data['api'])) {
            // straight to Guzzle client rather than configured lara_client
            return response()->json(['message' => 'API option not configured'], 200);
        }

        $client = new LaraClient($data['api']);
        $response = $client->$method($path, $params);

        return response()->json($response->getData(), 200);
    }
}
