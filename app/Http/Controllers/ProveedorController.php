<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProveedorModel;
use Illuminate\Database\QueryException;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //$proveedores=ProveedorModel::get();
       $proveedores = ProveedorModel::select('*')->orderBy('idProveedor','ASC');
       $limit=(isset($request->limit)) ? $request->limit:15;

       if(isset($request->search)){
           $proveedores = $proveedores ->where('idProveedor','like','%'.$request->search.'%')
           ->orWhere('razonSocial','like','%'.$request->search.'%')
           ->orWhere('nombreCompleto','like','%'.$request->search.'%')
           ->orWhere('dirreccion','like','%'.$request->search.'%')
           ->orWhere('telefono','like','%'.$request->search.'%')
           ->orWhere('correo','like','%'.$request->search.'%')
           ->orWhere('rfc','like','%'.$request->search.'%');
       }
       $proveedores = $proveedores->paginate($limit)->appends($request->all());
       return view('proveedores.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new ProveedorModel();
        $proveedor = $this->createUpdateProveedor($request, $proveedor);
        return redirect()
        ->route('proveedores.index')
        ->with('message','Registro Creado');
    }

    public function createUpdateProveedor(Request $request, $proveedor){
        $proveedor->razonSocial=$request->razonSocial;
        $proveedor->nombreCompleto=$request->nombreCompleto;
        $proveedor->dirreccion=$request->dirreccion;
        $proveedor->telefono=$request->telefono;
        $proveedor->correo=$request->correo;
        $proveedor->rfc=$request->rfc;
        $proveedor->save();
        return $proveedor;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=ProveedorModel::where('idProveedor',$id)->firstOrFail();
        return view('proveedores.show',compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=ProveedorModel::where('idProveedor',$id)->firstOrFail();
        return view('proveedores.edit',compact('proveedor'));
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
        $proveedor=ProveedorModel::where('idProveedor',$id)->firstOrFail();
        $proveedor= $this->createUpdateProveedor($request, $proveedor);
        return redirect()
        ->route('proveedores.index')
        ->with('message','Actulización finalizada');
        //return view('proveedores.edit',compact('proveedor'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $proveedor=ProveedorModel::findOrFail($id);
       try{
             $proveedor->delete();
             return redirect()
             ->route('proveedores.index')
             ->with('message','Eliminacion finalizada');
       }catch(QueryException $e){
        return redirect()
        ->route('proveedores.index')
        ->with('danger','Oye tranquilo viejo, no puedes eliminar eso ');

       }
    }
}