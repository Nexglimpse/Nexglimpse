<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function view(){
        return view('dashboard.index');
    }
}
