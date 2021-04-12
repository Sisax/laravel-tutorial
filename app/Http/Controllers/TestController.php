<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    function show() {
        $text = \DB::table('test')->where('id', '1')->first();
        $someVariable = 'its just a string';

        return view('test', [
            'test' => $text->text
        ]);
    }
}
