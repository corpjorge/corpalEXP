@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Añadir Actividad
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Nivel</a></li>
        <li class="active">Añadir Actividad</li>
      </ol>
    </section>


    <section class="content container-fluid">

      <a class="btn btn-app" href="{{ url('actividad')}}">
        <i class="fa fa-arrow-left"></i> Atras
      </a>

      @if (count($errors) > 0)
  			<div class="alert alert-danger">
  					<strong>Error!</strong><br><br>
  					<ul>
  							@foreach ($errors->all() as $error)
  									<li>{{ $error }}</li>
  							@endforeach
  					</ul>
  			</div>
	    @endif

      @if(session()->has('message'))
         <div class="alert alert-success alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <h4><i class="icon fa fa-check"></i> Realizado!</h4>
           {{session()->get('message')}}
         </div>
      @endif


      <div class="box box-primary" id="agregarSede">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresar Actividad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['url' => 'actividad', 'method' => 'post']) !!}
              <div role="form">
                <!-- text input -->

                <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="nombre" name="nombre" id="nombre" value="{{ old('nombre') }}" >
                </div>

                <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                  <label>Descripcion</label>
                  <input type="text" class="form-control  " placeholder="descripcion" name="descripcion" value="{{ old('descripcion') }}" >
                </div>

              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-info" ><i class="fa fa-fw fa-plus"></i> Añadir</button>

            </div>
            <!-- /.box-body -->
          </div>
{!! Form::close() !!}




@endsection
