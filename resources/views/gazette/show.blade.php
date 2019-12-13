@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">

      </div>
    </div>
  <hr>
  <div id="app">
    <div class="row justify-content-md-center">
      <div class="col-md-7">
        <h3 class="text-center">Gaceta N° {{ $gaceta->gaceta }}</h3>
        {{ dd($superannuated) }}
        <table class="table table-borderless table-hover">
          <tbody>
            <tr>
              <th><b>Nombres:</b></th>
              <td>{{$model->name}}</td>
              <th><b>Apellidos:</b></th>
              <td>{{$model->lastname}}</td>
            </tr>
            <tr>
              <th><b>Cedula:</b></th>
              <td>{{$model->identification}}</td>
              <th><b>Edad:</b></th>
              <td>{{$model->age}}</td>
            </tr>
            <tr>
              <th><b>Genero:</b></th>
              <td>{{$model->genders->name}}</td>
              <th><b>Organismo:</b></th>
              <td>{{$model->entities->name}}</td>
            </tr>
            <tr>
              <th><b>Nomina:</b></th>
              <td>{{$model->roster_id}}</td>
              <th><b>Estatus:</b></th>
              <td>{{$model->status_id}}</td>
            </tr>
            <tr>
              <th><b>Antiguedad:</b></th>
              <td>{{$model->antiquity}}</td>
              <th><b>Motivo:</b></th>
              <td>{{$model->reason_id}}</td>
            </tr>
            <tr>
              <th><b>Sueldo:</b></th>
              <td>{{$model->salary}}</td>
              <th><b>monto:</b></th>
              <td>{{$model->rode}}</td>
            </tr>
            <tr>
              <th><b>Porcentaje:</b></th>
              <td>{{$model->percentage}}%</td>
              <th><b>Año:</b></th>
              @if($model->year)
              	<td>{{$model->year}}</td>
              @elseif($model->created_at)
              	<td>{{substr($model->created_at, 0, 4)}}</td>
              @else
                <td>Sin registro</td>
              @endif
            </tr>
           		<tr>
                <th><b>N° de Oficio:</b></th>
                @if($model->number_correspondecia)
                  <td>{{$model->number_correspondecia}}</td>
                @else
                  <td>Sin registro</td>
                @endif
                <th><b>N° VP:</b></th>
                @if($model->number_vp)
                  <td>{{$model->number_vp}}</td>
                @else
                  <td>Sin registro</td>
                @endif
              </tr>
              <tr>
                <th><b>Fecha de Oficio:</b></th>
                @if($model->date_correspondencia)
                  <td>{{$model->date_correspondencia}}</td>
                @else
                  <td>Sin registro</td>
                @endif
                <th><b>Fecha recibido:</b></th>
                @if($model->date_correspondencia_ent)
                  <td>{{$model->date_correspondencia_ent}}</td>
                @else
                  <td>Sin registro</td>
                @endif
              </tr>
              <tr>
                <th><b>Gaceta:</b></th>
                @if($model->gaceta)
                  <td>{{$model->gaceta}}</td>
                @else
                  <td>Sin registro</td>
                @endif
                <th><b>Fecha Gaceta:</b></th>
                @if($model->date_gaceta)
                  <td>{{$model->date_gaceta}}</td>
                @else
                  <td>Sin registro</td>
                @endif
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection