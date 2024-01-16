<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class landing_page extends Controller
{
    public function index(){
       return view ('landing_page.index');
    }
}
