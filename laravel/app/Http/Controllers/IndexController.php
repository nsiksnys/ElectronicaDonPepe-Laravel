<?php

namespace DonPepe\Http\Controllers;

use Illuminate\Http\Request;

use DonPepe\Http\Requests;

class IndexController extends Controller
{
    //Verifica si el usuario tiene el permiso para ver la pagina
	/*public function __construct(){
	    $this->middleware('auth',['only' => 'admin']);
	}*/

	public function index(){
	    return view('index');
	}
}
