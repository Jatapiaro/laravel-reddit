<?php


/*
* Todas las clases tienen un namespace
*/
namespace App\Http\Controllers;

/*
* En laravel todos los controladores extienden de controller
*/
class HolaController extends Controller{

	public function hola($nombre){
		return "Hola {$nombre}!, te hablo desde el controlador";
	}

}