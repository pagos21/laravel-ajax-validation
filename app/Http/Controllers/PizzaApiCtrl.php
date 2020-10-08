<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaApiCtrl extends Controller
{
    public function pizzaApi(){
        $pizze = Pizza::all();
        return response()-> json($pizze);
    }

    public function most(){
        $pizze = Pizza::where('prezzo', '>', 80.00)-> get();
        return response()-> json($pizze);
    }
}
