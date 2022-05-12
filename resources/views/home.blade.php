@extends('layouts.app')
@section('content')
<style>
    img{
        filter: opacity(0.9) drop-shadow(0 0 0 red);
    }
</style>
<div class="col-md-12">
    <div class="col-md-8">
        <div class="col-md-6">
            <h3 style="font-family:algeria; text-align: center; color: white;">MIS DATOS</h3>
                <img src="https://alitasyhamburguesasparrilla.com/cirafod/2020/10/Logo-Alitas-y-hamburguesas-parrilla-grande.png" style="width:25%;margin-left: 35%;">
            <hr style="background: white;">
            <h3 style="font-family:algeria; text-align: center; color: white;">Nombre y Apellido:</h3>
            <h4 style="font-family:algeria; text-align: center; color: white;">{{ Auth::user()->usu_nombre}} {{ Auth::user()->usu_apellido}}</h4>
            <hr style="background: white;">
            <h3 style="font-family:algeria; text-align: center; color: white;">Email:</h3>
            <h4 style="font-family:algeria; text-align: center; color: white;">{{ Auth::user()->email}}</h4>
            <hr style="background: white;">
            <h3 style="font-family:algeria; text-align: center; color: white;">Cedula:</h3>
            <h4 style="font-family:algeria; text-align: center; color: white;">{{ Auth::user()->usu_cedula}}</h4>
            <hr  style="background: white;">
            <h3 style="font-family:algeria; text-align: center; color:white;">Telefono:</h3>
            <h4 style="font-family:algeria; text-align: center; color:white;">{{ Auth::user()->usu_telefono}}</h4>
        </div>
    </div>
</div>
@endsection
