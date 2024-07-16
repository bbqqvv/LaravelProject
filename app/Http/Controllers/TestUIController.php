<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestUIController extends Controller
{
    public function index() {
        return view('tests.chart');
    }
}
