<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function clases()
    {
        return view('web.clases');
    }

    public function propuestas()
    {
        return view('web.propuestas');
    }

    public function sobre_nosotros()
    {
        return view('web.nosotros');
    }
}
