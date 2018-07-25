<?php 

namespace floreriaLara\Http\Controllers;

use floreriaLara\Http\Controllers\Controller;

class PruebaControlador extends Controller{
	public function prueba($param){
		return 'Estoy dentro del controlador este es el parametro recibido: '. $param ;
	}
}