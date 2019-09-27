@extends('layouts.abb')

@section('content')

<div class="row">
    <div class="container-fluid">
  <div class="panel panel-primary">
      <div class="panel-heading">
      vista contacto
  </div>
      <div class="panel-body">
        @if(session('info'))
                        <div class="alert alert-warning ">
                            {{session('info')}}
                        </div>
                        @endif
                        <div class="col-sm-12">
                            <a href="{{route('noticias_create') }}" class="btn btn-primary btn-sm float-right">nuevo usuario</a>
                        </div>
                        

                        <div class="col-sm-12">
                            <div class="dataTables_wrapper form-inline" role="grid">
                                
                                <table class="datatable table table-striped table-bordered table-hover dataTable">
                                    <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 16px;">id</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Tipo de proceso: activate to sort column ascending" style="width: 119px;">Nombre</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Unidad sectorial de normalización: activate to sort column ascending" style="width: 251px;">Email</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Nombre del documento: activate to sort column ascending" style="width: 173px;">Fecha</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Justificación técnica: activate to sort column ascending" style="width: 153px;">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        @foreach($noticias as $notice)
                                        <tr>
                                            <th scope="row">{{$notice->id}} </th>
                                            <td>{{$notice->titulo}} </td>
                                            <td>{{$notice->titulo}} </td>
                                            <td>{{$notice->titulo}} </td>
                                            
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Acción <span class="caret"></span></button>
                                                    <ul class="dropdown-menu context pull-right">
                                                        <li><a href="">Editar</a></li>
                                                        <li><a href="">Eliminar</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    
                                </table>
                                
                            </div>
                        </div>
  </div>
    </div>   
</div>
</div>



            

@endsection    