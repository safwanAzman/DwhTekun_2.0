<?php

namespace App\Http\Controllers\usahawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsahawanController extends Controller
{
    public function usahawan500()
    {
        return view ('pages.usahawan.lima-ratus-usahawan');
    }
}
