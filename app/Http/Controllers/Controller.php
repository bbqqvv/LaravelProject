<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class Controller
{


    public function getpPath(Request $request)
    {
        $path = $request->path(); // Nếu đang ở '/customer/login', thì $path sẽ là 'customer/login'
        $lastSegment = Str::afterLast($path, '/'); // Trả về 'login'
        return $lastSegment;

    }
}
