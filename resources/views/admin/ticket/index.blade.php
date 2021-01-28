@extends('layouts.app')

@section('title', 'Lista de turnos')

@section('icon_title')

<i class="fa fa-fw fa-users"></i>

@endsection


@section('content')

 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Turnoss</h3>

          
        </div>
        <div class="card-body">

        <div class="table-responsive">
      
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Prioridad</th>
                        <th>usuario</th>
                        <th>estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)

                    <tr>
                        <td><a href="{{ route('admin.ticket.show', $ticket->id) }}">{{ $name->id }}</a></td>
                        <td>{{ $ticket->type_id }}</td>
                        <td>{{ $ticket->priority_id }}</td>
                        <td>{{ $ticket>requester_user_id }}</td>
                        <td>{{ $ticket->name }}</td>
                        <td>{{ $ticket->flag_status }}</td>
                      
                    </tr>

                    @endforeach 
                    
                    
                </tbody>
            </table>
        </div>  
        
         
        <!--div.table-responsive>table.table.table-hover>(thead>tr>th{Nombres}+th{Correo}+th{Ususario}+th{Fecha de Inicio}+th{Fecha de Fin})+(tbody>tr*10>td*5)-->
         
      
        </div>
        <!-- /.card-body -->
       <!-- <div class="card-footer">
          Footer
        </div>-->
        <!-- /.card-footer-->
    </div>
@endsection
