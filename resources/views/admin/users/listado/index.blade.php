

@extends('admin.general.layout')

@section('title-module')
    <h1 class="h3 mb-0 text-gray-800">
        Usuarios

        <a href="{{route('users.create')}}" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Añadir
        </a>
    </h1>
@endsection

@section('css')
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
          Listado
        </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Fecha de registro</th>
              <th>Fecha de modificación</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de registro</th>
                <th>Fecha de modificación</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>

 
@endsection


@section('js')

  <!-- Page level plugins -->
  <script src="{{url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{url('js/admin/demo/datatables-demo.js')}}"></script>
 

@endsection