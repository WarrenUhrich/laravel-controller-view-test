<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function index(Request $request)
    {
        $params = [
            'name'        => 'John',
            'contentbody' => 'Hello there, this is a message from me!',
        ];

        return view( 'hello-world' )->with( $params );
    }

    public function getValue(Request $request, $value)
    {
        $params = array(
            'myvalue' => $value,
        );

        return view( 'get-value' )->with( $params );
    }
}
