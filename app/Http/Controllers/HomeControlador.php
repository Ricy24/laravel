<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public function __invoke()
    {
      return "bienvenido a la paguina principal";
    }
}
