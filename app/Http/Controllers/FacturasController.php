<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Productos;
use App\Facturas;
use App\Detalle;
use DB;

class FacturasController extends Controller
{

    public function index()
    {
        $facturas=Facturas::all();
        $clientes=Clientes::all();
        return view('facturas.index')->with('facturas',$facturas)->with('clientes',$clientes);
    }

    public function create()
    {
        $clientes=Clientes::all();
        $productos=Productos::all();
        return view('facturas.create')->with('clientes',$clientes)->with('productos',$productos);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $facturas=Facturas::create($data);
        return redirect(route('facturas.edit',$facturas->fac_id));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $facturas=Facturas::find($id);
        $clientes=Clientes::all();
        $productos=Productos::all();
        $detalle=DB::select("SELECT * FROM factura_detalle fd
                                            JOIN productos p ON fd.pro_id=p.pro_id
                                            WHERE fd.fac_id=$id");
        return view('facturas.edit')
        ->with('facturas',$facturas)
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ->with('detalle',$detalle);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

     public function detalle(Request $request)
    {
        $datos=$request->all();
        $fac_id=$datos['fac_id'];

        if (isset($datos['btn_detalle']) == 'btn_detalle') {
            //guardar el detalle
            $datos['fact_vt']=0;
            Detalle::create($datos);
        }

        if (isset($datos['btn_eliminar']) >0) {
            //Elimino el detalle
            $fact_id=$datos['btn_eliminar'];
            Detalle::destroy($fact_id);
            // dd($fact_id);

        }

        return redirect(route('facturas.edit',$fac_id))->with('SI','Si')->with('NO','No');
    }
}
