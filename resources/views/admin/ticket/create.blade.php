@extends('layouts.app')

@section('title', 'Crear Nuevo Turno')

@section('icon_title')

<i class="fa fa-fw fa-user-plus"></i>

@endsection


@section('content')



        <div class="card-header">
          <h3 class="card-title">Crear turnos</h3>
      <br>
        <!-- </div>
         <div class="container col-md-8 col-md-offset-2">
         <div class="well well bs-component">
            <form class="form-horizontal"  method="post" >
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <input type="hidden" name= "_token" value="{!!csrf_token()!!}">
                <fieldset>
                    <legend>Enviar un nuevo ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Usuario</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="usuario" name="name">
                        </div>
                        <label for="title" class="col-lg-2 control-label">Tipo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="type" placeholder="tipo" name="type">
                        </div>
                        <label for="title" class="col-lg-2 control-label">Prioridad</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="pryority" placeholder="prioridad" name="pryority">
                        </div>
                        <label for="title" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="status" placeholder="estado" name="status">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Descripcion</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                            <span class="help-block">Ticket para atencion.</span>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
         </div>
      </div>
      <div class="card-body">-->



              <h1>Crear ticket</h1>
              <form action="{{route ('admin.ticket.create')}}" method="post"></form>
              {{csrf_field()}}
              <label for="title" class="col-lg-2 control-label">ID</label>
              <div class="col-lg-10">
              <input type=text name="id" placeholder="id">
              </div>
              <label for="title" class="col-lg-2 control-label">Tipo</label>
              <div class="col-lg-10">
              <input type=text name="type_id" placeholder="tipo">
              </div>
              <label for="title" class="col-lg-2 control-label">Prioridad</label>
              <div class="col-lg-10">
              <input type=text name="priority_id" placeholder="prioridad">
              </div>
              <label for="title" class="col-lg-2 control-label">Userid</label>
              <div class="col-lg-10">
              <input type=text name="requester_user_id" placeholder="user id">
              </div>
              <label for="title" class="col-lg-2 control-label">Nombres</label>
              <div class="col-lg-10">
              <input type=text name="name" placeholder="nombres">
              </div>
              <label for="title" class="col-lg-2 control-label">Estado</label>
              <div class="col-lg-10">
              <input type=text name="flag_status" placeholder="estado">
              </div>

        <button type="submit">Crear ticket</button>
        </form>
       <p>
      <a href="{{ route( 'admin.ticket.index' )}}" >Regresar a la lista de tickets</a>
   </p>


    </div>
    </div>
@endsection