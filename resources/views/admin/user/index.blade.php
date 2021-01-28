@extends('layouts.app')

@section('title', 'Lista de usuarios')

@section('icon_title')

<i class="fa fa-fw fa-users"></i>

@endsection


@section('content')

 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de usuarios</h3>

          <div class="card-tools">
         
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
               </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
              </button>
              <a href="{{ route('admin.user.create')}}" title="crear usuario"> 
                 <i class="fas fa-plus"></i>
              </a>
            
              
           
           </div>
        </div>
        <div class="card-body">

        <div class="table-responsive">
      
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Ususario</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Fin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                        <td><a href="{{ route('admin.user.show', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->start_date }}</td>
                        <td>{{ $user->end_date }}</td>
                      
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
