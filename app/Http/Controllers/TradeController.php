<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeController extends Controller
{
    function start_trade(){
        return view('trade.register');
    }
}
