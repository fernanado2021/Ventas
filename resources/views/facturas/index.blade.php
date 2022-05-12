@extends('layouts.app')
@section('content')
	<div class="col-md-12">
		<div class="col-md-8">
			<div class="col-md-8">
				<h1 style="font-family:Acero y Sangre; color:white;"> Facturas
					<a href="{{route('facturas.create')}}" class="btn btn-success">
					<img src="https://cdn-icons-png.flaticon.com/512/359/359858.png" width="20px;" > Nueva Factura
				</a>
				</h1>
				   <table  class="table  table-bordered table-condensed table-hover">
                        <thead>
                            <th style="text-align:center; color: white;">#</th>
                            <th style="text-align:center; color: white;">Factura</th>
                            <th style="text-align:center; color: white;">Fecha</th>
                            <th style="text-align:center; color: white;">Cliente</th>
                            <th style="text-align:center; color: white;">Acciones</th>
                        </thead>
                        <tbody>
                        	@foreach($facturas as $f)
                        		<tr>
                        			<td style="text-align:center; color:white;">{{$loop->iteration}}</td>
                        			<td style="text-align:center; color:white;">{{$f->fac_no}}</td>
                        			<td style="text-align:center; color:white;">{{$f->fac_fecha}}</td>
                                    @foreach($clientes as $c)
                                    <td style="text-align:center; color:white;">{{$c->cli_nombre}}  {{$c->cli_apellido}}</td>
                                    @endforeach
                                    <td style="text-align:center; color:white;">
                                        <div class="" style="text-align: center;">
                                          <a href="{{route('facturas.edit',$f->fac_id)}}" class="btn btn-primary btn-sm" title="Editar"><i class="bi bi-pencil-square"></i></a>
                                        </div>
                                    </td>
                        		</tr>
                        		@endforeach
                        </tbody>
                        <tfoot>
                            <th style="text-align:center; color:white;">#</th>
                            <th style="text-align:center; color:white;">Factura</th>
                            <th style="text-align:center; color:white;">Fecha</th>
                            <th style="text-align:center; color: white;">Cliente</th>
                            <th style="text-align:center; color:white;">Acciones</th>
                          </tfoot>
                    </table>
			</div>
		</div>
	</div>
@endsection