<?php

namespace App\Http\Controllers\performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrestasiKeseluruhanController extends Controller
{
    public function index()
    {
        return view ('pages.performance.prestasi-keseluruhan');
    }
}
