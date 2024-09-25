<?php

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
use App\Http\Controllers\HomeControlador;
use App\Http\Controllers\CursosController;

Route::get('/', HomeControlador::class);

route::get('cursos', [CursosController::class, 'index']);



route::get('cursos/create', [CursosController::class, 'create']);


route::get('cursos/{cursos}', [CursosController::class, 'show']);


/*

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if ($categoria) {
        return "Bienvenido al cursos: $curso, de la categoria {$categoria}";
    }

    else {
        return "bienvenido al curso $curso ";
    }
 
  });

  */