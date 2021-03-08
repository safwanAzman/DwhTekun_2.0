<?php

namespace App\Http\Controllers\laksana;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaksanaController extends Controller
{
    public function index()
    {
        return view ('pages.laksana.laksana');
    }
}
