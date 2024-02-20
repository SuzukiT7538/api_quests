<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function health() {
        return response()->json(['status' => 'hello']);
    }
}
