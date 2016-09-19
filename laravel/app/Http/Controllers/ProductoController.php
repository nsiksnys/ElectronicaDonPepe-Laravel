<?php

namespace DonPepe\Http\Controllers;

use Illuminate\Http\Request;
use DonPepe\Http\Requests;
use DonPepe\Producto;//modelo
use DonPepe\Repositories\ProductoRepository as ProductoRepository;//repositorio del modelo inyectado en el controller

class ProductoController extends Controller
{
	private $repositorio;//acceso a la base de datos

	//Constructor
	public function __construct(ProductoRepository $repo){
	    //$this->middleware('auth',['only' => 'admin']);//Verifica si el usuario tiene el permiso para ver la pagina
	    $this->repositorio = $repo;
	}

	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$todos = $this->repositorio->all();
        return view('producto', ['productos' => $todos]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
