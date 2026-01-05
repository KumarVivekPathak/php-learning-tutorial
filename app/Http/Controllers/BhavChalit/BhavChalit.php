<?php

namespace App\Http\Controllers\BhavChalit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class BhavChalit extends Controller
{
    
    public function index(){

        return view('bhav-chalit.index');
    }

}
