@extends('layouts.app')

@section ('icon_title')

 <i class="fa fa-lg fa-fw fa-home"></i> 

@endsection

@section ('title')

Bienvenido

@endsection


@section('content')
 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sistema de turnos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Presiona tiket para crear uno o  usauarios en administracion para ver la lista de ususarios!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Cusrso de Framework
        </div>
        <!-- /.card-footer-->
    </div>
@endsection