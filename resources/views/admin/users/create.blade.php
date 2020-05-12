
@extends('admin.general.layout')

@section('title-module')
    <h1 class="h3 mb-0 text-gray-800">
        Añadir usuario

        <a href="{{route('users.index')}}" class="btn btn-info">
            <i class="fas fa-list"></i>
            Volver al listado
        </a>

    </h1>
@endsection


@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
          Añada los datos del nuevo usuario
        </h6>
    </div>
    <div class="card-body">
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
        
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="password_confirm">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="rol">Rol</label>
                            
                            <select class="form-control" name="rol">
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                        </div>    

                        <div class="form-group col-md-12">
                            <input type="submit" value="Guardar" class="btn btn-success float-right">
                        </div>

                    </div>
                </div>   
            </div>
        </form>
    </div>
</div>
@endsection